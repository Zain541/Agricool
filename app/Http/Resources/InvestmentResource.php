<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvestmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
   public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'id' => $this->id,
        //     'project_name' => $this->project_name,
        //     'farm_name' => $this->farm_name,
        //     'investment' =>$this->whenPivotLoaded('invesor_project', function () {
        //     return $this->pivot->investment;
        //      }),
            // 'email' => $this->email,
            // 'phone_number' => $this->phone_number,
            // 'investment' => new SpecialityResource($this->whenLoaded('specialities')),
        
    }
}
