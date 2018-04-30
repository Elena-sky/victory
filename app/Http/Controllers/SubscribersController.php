<?php

namespace App\Http\Controllers;

use App\Repositories\SubscribersRepository;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscriber['name'] = $request['name'];
        $subscriber['email'] = $request['email'];

        SubscribersRepository::save($subscriber);


        return redirect('/');
    }
}
