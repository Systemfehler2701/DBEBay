<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request, Listing $listing)
    {
        $customer = auth()->user(); // oder auth('customer')->user() falls du ein anderes Guard benutzt

        if (!$customer) {
            return redirect()->route('login')->with('error', 'Bitte logge dich ein, um Favoriten zu speichern.');
        }

        $customer->favorites()->attach($listing->id);

        return back()->with('success', 'Anzeige wurde zu deinen Favoriten hinzugefügt!');
    }

}

