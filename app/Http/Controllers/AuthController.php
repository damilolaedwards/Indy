<?php
use App\User;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
	public function getRegister()
	{
		return view('pages.register');
}

public function getLogin()
	{
		return view('pages.login');
}

public function postRegister(Request $request){
	\Log::debug($request);
	$this->validate($request, [
			'name'=> 'required|max:16|min:3|unique:users|alpha_dash',
			'email'=> 'required|email',
			'password'=>'required|min:3',
			
			]);
	User::create([
			 
			'email' => $request->input('email'),
			'username' => $request->input('name'),
			'password' => $request->input('password'),
			
			]);

	return redirect()->route('Auth.login')->with('info','You are now registered. A confirmation message has been sent to your email, You may now log in.');
}
	public function postLogin(Request $request){
		$this->validate($request, [
			'name'=> 'required',
			'password'=> 'required',
			]);
		if (!\Auth::attempt($request->only(['name','password']), $request->has('remember'))){
			return redirect()->back()->with('warning','Invalid login details');

	      }
	      return redirect()->route('homepage');
	  }
   }