<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Tasks;
use Illuminate\Http\Request;

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
        $tasks = Tasks::all();
        $client = Clients::all();
        return view('home', compact('tasks', 'client'));
    }
}
