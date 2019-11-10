<?php

namespace App\Http\Controllers\Api\Investor;

use App\project;
use App\Investor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\InvestmentResource;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Stripe;


class InvestmentController extends Controller
{
    public function store(Request $request)
    {
         $stripe = new Stripe;
    	$validator = Validator::make($request->all(), [
            'investment' => ['required', 'numeric','min:1'],
        ]);
    	 if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $investor_id = $request->investor_id;

        $investor_stripe_id = Investor::findOrFail($investor_id)->stripe_id;

         $charge = $stripe->charges()->create([
    'customer' => $investor_stripe_id,
    'currency' => 'USD',
    'amount'   => $request->investment,
]);


        $investor = Investor::findOrFail($investor_id);
        $investor->projects()->attach($request->project_id,[
            'investment'=> $request->investment,
            'stripe_payment_id' => $charge['id']
    ]);
		
        	return response()->json(['success'=> "Investment for this project has been done"]);
        

    }

    public function insertcard(Request $request)
    {
        $stripe = new Stripe;
        try {
   $token = $stripe->tokens()->create([
    'card' => [
        'number'    => $request->number,
        'exp_month' => $request->exp_month,
        'cvc'       => $request->cvc,
        'exp_year'  => $request->exp_year,
    ],
]);
} catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
 $body = $e->getMessage();  
}
if(isset($token['id']))
{
    $card = $stripe->cards()->create($request->customer_stripe_id, $token['id']);
    return response()->json(['success'=> "Card has been entered successfully"]); 
}
 return response()->json(['error'=> $body]); 

    }


    public function index(Investor $investor)
    {
    	return InvestmentResource::collection($investor->projects);
    }
}
