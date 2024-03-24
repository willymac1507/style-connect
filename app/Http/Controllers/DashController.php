<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function show(Request $request)
    {
        $user = auth()->user();
        $org = $user->organisation;
        $profiles = [];
        if($user->client) {
            $profiles[] = ['type' => 'client', 'profile' => $user->client];
        }

        if($user->student) {
            $profiles[] = ['type' => 'student', 'profile' => $user->student];
        }

        return view('dashboard', [
            'user' => $user,
            'profiles' => $profiles,
            'org' => $org
    ]);
    }
}
