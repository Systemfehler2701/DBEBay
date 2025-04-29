<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Customer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:customers'],
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|confirmed|min:8',
            'mobile' => 'required|string',

            // Auch Adresse prüfen:
            'street' => ['required', 'string', 'max:255'],
            'house_number' => ['required', 'string', 'max:20'],
            'postal_code' => ['required', 'string', 'max:10'],
            'city' => ['required', 'string', 'max:255'],
        ]);

        //1. Adresse in der Datenbank suchen
        $address = Address::where('street', $request->street)
            ->where('house_number', $request->house_number)
            ->where('postal_code', $request->postal_code)
            ->where('city', $request->city)
            ->first();


        // 2. Adresse erstellen
        if (!$address) {
            $address = Address::create([
                'street' => $request->street,
                'house_number' => $request->house_number,
                'postal_code' => $request->postal_code,
                'city' => $request->city,
            ]);
        }

        // 3. Customer erstellen
        $customer = Customer::create([
            'username' => $request['username'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'mobile' => $request['mobile'],
            'address_id' => $address->id, // Magic here
        ]);

        event(new Registered($customer));

        Auth::login($customer);

        return redirect()->route('Startseite');
    }
}
