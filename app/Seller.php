<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{

    protected $table = 'sellers';
    protected $fillable = [
    'email','password','store_name','store_type','description','title','firstname','profile_picture','id_card','lastname','phone_number','store_slug','address','city','state_id','lga_id','refferal_code'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

   

}
