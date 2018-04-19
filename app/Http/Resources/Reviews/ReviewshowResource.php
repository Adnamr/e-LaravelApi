<?php

namespace App\Http\Resources\Reviews;

use Illuminate\Http\Resources\Json\Resource;

class ReviewshowResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'customer'=>$this->customer,
            'review'=>$this->review,
            'star'=>$this->star,
            'id_product'=>$this->id_product,     
        ];
    }
}
