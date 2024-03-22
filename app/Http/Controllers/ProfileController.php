<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        $hasClient = $hasStudent = $hasOrg = false;
        $user = auth()->user();
        if($user->client) {
            $hasClient = true;
        };
        if($user->student) {
            $hasStudent = true;
        }
        if($user->organisation) {
            $hasOrg = true;
        }

        return view('profile.create', [
            'user' => $user,
            'canClient' => !$hasClient,
            'canStudent' => !$hasStudent && $hasOrg,
            'canJoin' => !$hasOrg
    ]);
    }
}
