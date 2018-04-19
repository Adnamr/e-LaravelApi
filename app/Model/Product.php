<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Reviews;

class Product extends Model
{
    protected $table='products';

    protected $fillable=['name_product','body_product','price_product','stock','discount'];

    protected $primaryKey = 'id';

   	public function review()
   	{
   		return $this->hasMany('App\Model\Reviews','id_product');
   	}
}
