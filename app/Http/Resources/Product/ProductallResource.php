<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductallResource extends Resource
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
            'body_product'=> $this->body_product,
            'price_product'=>$this->price_product,
            'href'=>route('products.show',$this->id)

        ];
    }
}
