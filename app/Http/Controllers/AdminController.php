<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\MessageBag;
use App\Http\Requests;
use Illuminate\Database\Seeder;
use App\Admin;

class AdminController extends Controller
{
	public function getlistadmin()
	{
		$admin = Admin::all();
		return view('backend.admin.list', ['admin' => $admin]);
	}
	public function dataeditadmin(Request $request)
	{
		if($request->ajax()) {
			$admin = Admin::find($request->id);
			return response()->json($admin);
		}
	}
	public function ajaxeditadmin(Request $request)
	{
		$rules = [
			'name'=> 'required',
			'phone'=> 'required',
			'alias' => 'required',
		];	
		$messages = [
			'name.required' => 'Please enter name',
			'phone.required'=> 'Please enter phone.',
			'alias.required'=> 'Please enter alias.',
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
		}
		else {
			$admin = Admin::where('email', $request->email)->first();
			$admin->name = $request->name;
			$admin->email = $request->email;
			$admin->phone = $request->phone;
			$admin->alias = $request->alias;
			$admin->gender = $request->gender;
			$admin->dominion = $request->dominion;
			$admin->save();
			return response()->json([
				'error' => false,
				'admin' => $admin
			], 200);
		}

	}
	public function ajaxdeleteadmin(Request $request)
	{
		$admin = Admin::find($request->id);
		if($admin) {
			$admin->delete();
			return response()->json([
				'error' => false,
			], 200);
		} else {
			return response()->json([
				'error' => true,
				'message' => 'Not found admin.'
			], 200);
		}
	}
	public function postloginadmin(Request $request)
	{
		$this->validate($request,
			[
				'email'=>'required|email',
				'password'=> 'required',
			],
			[
				'email.required' => 'Please enter email.',
				'email.email' => 'Email is invalid.',
				'password.required'=> 'Pleasr enter password.',
			]);
		$remember =$request->has('remember') ? true : false ;
		if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember)){
			return redirect('admin')->with('notify', 'Wellcome here.');
		}

		else{

			return back()->with('notify', 'email or password is wrong.');

		}
	}
	public function getlogout()
	{
		Auth::guard('admin')->logout();
		return redirect('login.html')->with('notify', 'Sign out success.');
	}
	public function getlockscreen($id)
	{	
		Auth::guard('admin')->logout();
		$admin = Admin::find($id);
		return view('backend.layouts.lockscreen', ['admin' => $admin]);
	}
	public function postchangepassword(Request $request)
	{
		$this->validate($request,
			[
				'oldpassword'=>'required',
				'newpassword'=> 'required',
				'comfirmpassword'=> 'required',
			],
			[
				'oldpassword.required' => 'Enter old password.',
				'newpassword.required'=> 'Enter new password.',
				'comfirmpassword.required'=> 'Enter password comfirm.',
			]);
		$admin = Auth::guard('admin')->user();
		if (Hash::check($request->oldpassword, $admin->password) == false) {
			return back()->with('notify', 'Curent password is wrong.');
		} 
		else if ($request->newpassword !=$request->comfirmpassword ) {
			return back()->with('notify', 'New password, password comfirm are same.');
		}

		else if ($request->newpassword == $request->oldpassword) {
			return back()->with('notify', 'Curent password, new password are same.');
		}
		else {
			$admin->password = bcrypt($request->newpassword);
			$admin->save();
			return redirect('admin/changepassword.html/name='.$admin->nameslug)->with('success', 'Change password is success.');
		}
	}
}