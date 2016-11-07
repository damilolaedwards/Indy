<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productdownvote extends Model
{

    protected $table = 'productdownvote';
    protected $fillable = [
    'user_id','product_id','downvote'
    ];

   

    public function product(){
        return $this->belongsTo('App\Product');
    }

}
