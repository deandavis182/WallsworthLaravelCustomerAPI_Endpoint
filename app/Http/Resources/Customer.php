<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Customer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'customer' => $this->Name,
            'address' => $this->Address,
            'phone_number' => $this->Phone_Number,
            'email_address' => $this->Email_Address,
            'Start_Date' => $this->Start_Date,
            'Contract_Start_Date' => $this->Contract_Start_Date,
            'Contract_Length' => $this->Contract_Length
            //'methods' => get_object_vars($this)
        ];
    }
}
