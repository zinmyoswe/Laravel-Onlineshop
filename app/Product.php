<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name','description','size', 'category_id','price','qty','image'];
	
    public function category()
    {
    	$this->belongsTo(Category::class);
    }
}
