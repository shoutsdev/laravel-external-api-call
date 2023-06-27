<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function store()
    {
        $response   = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'This is test from shouts.dev as title',
            'body'  => 'This is test from shouts.dev as body',
        ]);

        $jsonData = $response->json();

        dd($jsonData);

    }
}
