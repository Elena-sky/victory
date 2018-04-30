<?php

namespace App\Http\Controllers;

use App\Repositories\SubscribersRepository;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


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

        // send doc1.docx
        Mail::to($subscriber['email'])
            ->send(new SendMail);

        return redirect('/');
    }


    public function send(Request $request)
    {

        $data = $request->only(['from', 'to']);
        $data['to'] .= ' 23:59:59';

        $subscribers = SubscribersRepository::search($data);

        return view('home', compact('subscribers', 'data'));
    }




}
