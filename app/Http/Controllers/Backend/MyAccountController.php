<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;

class MyAccountController extends Controller
{

	public function index(Request $request)
	{
		$data['user'] = User::find(Auth::user()->id);
		$data['meta_title'] = 'My Account List';
		return view('backend.my_account.list', $data);
	}

	public function update(Request $request)
	{
		$user = User::find(Auth::user()->id);
		if(!empty($request->password))
		{
			$user->password = Hash::make($request->password);	
		}
		
		$user->email 		= trim($request->email);
		$user->name 		= $request->name;

		$user->save();
        return redirect('admin/myaccount')->with('success', 'Account successfully updated!');
	}

}

?>