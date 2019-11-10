<?php

namespace App\Http\Controllers\Api\Investor;

use App\Investor;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\InvestorResource;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Stripe;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api_investor', ['except' => ['login','register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api_investor')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return new InvestorResource(auth('api_investor')->user());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth('api_investor')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api_investor')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function register(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:10'],
            'last_name' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:investors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:50'],
            'gender' => ['required', 'string', 'max:5'],
            'date_of_birth' => ['required', 'string'],
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $stripe = new Stripe();
          $stripe_investor = $stripe->customers()->create([
            'email' => $request->email
            ]);
        $request['password'] = bcrypt($request->password);

        $investor = Investor::create($request->all());

        $investor->stripe_id = $stripe_investor['id'];
        $investor->save();
        

        return new InvestorResource($investor);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api_investor')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api_investor')->factory()->getTTL() * 60
        ]);
    }
}
