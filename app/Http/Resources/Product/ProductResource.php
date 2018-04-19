<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
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
            'name_product'=>$this->name_product,
            'body_product'=> substr($this->body_product, '0','30')."..." ,
            'price_product'=>$this->price_product,
            'stock'=>$this->stock,
            'discount'=>$this->discount,
            'rating'=>
            (round($this->review->avg('star'))=='0')?'Not Rated Yet':round($this->review->avg('star')),
            'href'=>route('reviews.index',$this->id)
            
        ];
    }
}
