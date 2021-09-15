<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allPosts =  Post::all(); //leggo il database attraverso il model
        dump($allPosts);
        return view('home', compact ('allPosts')); // lo inoltro come combinazione chiave valore
    }
}
