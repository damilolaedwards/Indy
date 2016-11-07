<?php

namespace App\Http\Controllers;
use Auth;
class HomeController extends Controller
{
	public function getIndex(){
		return view('pages.index');
	}

	public function getSellerHome(){
		return view('pages.sellerlanding');
	}

	public function getCart(){
		return view('pages.cart');
	}
}