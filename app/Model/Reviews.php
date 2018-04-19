<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Product;

class Reviews extends Model
{
	protected $table='reviews';

	protected $primaryKey = 'id';
	
    public function products()
    {
    	return $this->belongsTo('App\Model\Product');
    }
}
