<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'productreviews';
    protected $fillable = [
    'user_id','product_id','review'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }

}
