<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Database\Seeder;
use Validator;
use App\User;
use Illuminate\Support\MessageBag;

class HomeController extends Controller
{

	public function getLogout()
	{
		Auth::logout();
		return redirect()->back();
	}
	public function ajaxPostLogin(Request $request)
	{
		$rules = [
			'email'=>'required|email',
			'password'=> 'required',
		];	
		$messages = [
			'email.required' => 'Please enter email.',
			'email.email' => 'Email is invalid.',
			'password.required'=> 'Pleasr enter password.',
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		else {
			if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
				return response()->json([
					'error' => false,
					'message' => 'success'
				], 200);
			}

			else{
				$errors = new MessageBag(['errorlogin' => 'Email or password is wrong!']);
				return response()->json([
					'error' => true,
					'message' => $errors
				], 200);

			}
		}
	}
	public function checkLogin()
	{
		if(Auth::check()) {
			return redirect('home')->with('notify-sign-in', "You mustn't sign up, because you have signed in.");
		} else {
			return view('frontend.register');
		}
	}
	public function PostRegister(Request $request)
	{
		$rules = [
			'email'=>'email|unique:users',
		];	
		$messages = [
			'email.email' => 'Email is invalid.',
			'email.unique' => 'Email has already existed.'
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		else {
			$user = new User;
			$user->email = $request->email;
			$user->name = $request->name;
			$user->nameslug = str_slug($request->name);
			$user->gender = $request->gender;
			$user->birthday = $request->birthday;
			$user->avatar = $request->avatar;
			$user->password = bcrypt($request->password);
			$user->save();
			return response()->json([
				'error' => false,
				'message' => 'success'
			], 200);
		}
	}
    //
}
