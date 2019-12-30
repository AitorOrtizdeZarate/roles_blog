<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('role:admin');
	}
    public function index(){
    	$users = User::all();
    	return view('admin', compact('users'));
    }

    public function cambioRol(Request $request, $id){
    	$user = User::find($id);
    	$user->role = $request -> get('role');
    	$user->save();

    	return redirect(route('admin'));
    }
}
