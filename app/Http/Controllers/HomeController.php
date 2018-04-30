<?php

namespace App\Http\Controllers;

use App\Repositories\SubscribersRepository;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = SubscribersRepository::all();
        $data['from']='';
        $data['to']='';
        return view('home', compact('subscribers', 'data'));
    }
}
