<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = [
    'name'
    ];

   

    public function product(){
        return $this->hasMany('App\Product');
    }

     public function subcategory(){
        return $this->hasMany('App\Subcategory');
    }

}
