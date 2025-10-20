<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // You need to import the User model
use Illuminate\Support\Facades\Hash; // You need to import Hash
use Illuminate\Support\Facades\Auth; // You need to import Auth
use App\Models\Role; // Optional: If Role is used in the view/logic

class AuthController extends Controller
{
    // The registration logic needs to be inside a method, e.g., 'store'
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);

        // Optional: create candidate or employer profile automatically
        if ($user->role_id == 2) { // Candidate
            $user->candidate()->create([
                'resume' => null,
                'phone' => null,
                'address' => null,
            ]);
        } elseif ($user->role_id == 3) { // Employer
            $user->employer()->create([
                'company_name' => null,
                'website' => null,
                'phone' => null,
                'address' => null,
            ]);
        }

        Auth::login($user);
        return redirect(route('dashboard'));
    }
    // You can add other methods like showRegistrationForm, login, etc. here
}