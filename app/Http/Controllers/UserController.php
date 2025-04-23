<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class UserController extends Controller
{
    public function showRegisterForm()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        // Validierung, Speichern, Weiterleitung, Applaus
    }

    public function showLoginForm()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Die angegebenen Daten stimmen nicht überein.',
        ]);
    }

    public function index()
    {

    }

    public function show($id)
    {
        $user = Customer::findOrFail($id);
        return view('user.show', compact('user'));
    }


    public function edit($id)
    {
        $user = Customer::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $user = Customer::findOrFail($id);
    }

    public function logout()
    {

    }
}
