<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function index()
	{
		return view('register.index', [
			'title' => 'Register'
		]);
	}

	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required|max:255',
			'username' => ['required', 'min:3', 'max:255', 'unique:users'],
			'email' => ['required', 'email:dns', 'unique:users'],
			'password' => ['required', 'min:5', 'max:255'],
			// 'password' => [ 'required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
		]);

		// $validatedData['password'] = bcrypt($validatedData['password']);
		$validatedData['password'] = Hash::make($validatedData['password']);

		// return $request->all();
		User::create($validatedData);

		// $request->session()->flash('success', 'Registration successfull! Please login');


		return redirect('/login')->with('success', 'Registration successfull! Please login');
	}
}
