<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create()
    {
        return view('client.create', [
            'user' => auth()->user()
        ]);
    }
        public function store(StoreClientRequest $request): \Illuminate\Http\RedirectResponse
    {
        $attributes = $request->validated();

        Client::create($attributes);

        return to_route('dashboard')->with('success', 'The employee has been added.');
    }

    public function show(Client $client)
    {
        return view('client.show', [
            'client' => $client
        ]);
    }

    public function edit(Client $client)
    {
        return view('client.edit', [
            'client' => $client
        ]);
    }
}
