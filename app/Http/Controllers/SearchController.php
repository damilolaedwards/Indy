<?php
use App\User;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SearchController extends Controller
{
	public function getResults(Request $request)
	{
		$query = $request->input('query');
		
		$products = \App\Product::where('name', 'LIKE', "%{$query}%")->paginate(20);
		return view('pages.search')->with('products', $products); 
	}
}