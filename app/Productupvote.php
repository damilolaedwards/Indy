<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productupvote extends Model
{

    protected $table = 'productupvote';
    protected $fillable = [
    'user_id','product_id','upvote'
    ];

   

    public function product(){
        return $this->belongsTo('App\Product');
    }

}
