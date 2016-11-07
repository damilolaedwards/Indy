<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = [
    'name','description','product_id','category_id','subcategory_id','seller_id','price','picture','approval','status','discount'
    ];

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function subcategory(){
        return $this->belongsTo('App\Subcategory', 'subcategory_id');
    }

    public function review(){
    	return $this->hasMany('App\Productreview', 'product_id');
    }

    public function upvote(){
    	return $this->hasMany('App\Productupvote', 'product_id');
    }

     public function downvote(){
    	return $this->hasMany('App\Productdownvote', 'product_id');
    }

}
