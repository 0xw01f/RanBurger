<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function list() {
        
        $clients = [
            'Jean',
            'Marc',
            'Virginie'
        ];

        return view('clients.index', [
            'clients' => $clients
        ]);
    }
}
