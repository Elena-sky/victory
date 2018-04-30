<?php

namespace App\Http\Controllers;

use App\Mail\SendSubscribers;
use App\Repositories\SubscribersRepository;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class SubscribersController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * Send an email.
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


    /**
     * Search data in storage and display it.
     * Send the mail to subscribers.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function send(Request $request)
    {

        $text_message = request('text_message');
        $data = $request->only(['from', 'to']);
        $data['to'] .= ' 23:59:59';
        $data['from'] = date('Y-m-d h:i:s',strtotime($data['from'])-86400);
        $data['to'] = date('Y-m-d h:i:s',strtotime($data['to']));

        $subscribers = SubscribersRepository::search($data);

        foreach ($subscribers as $subscriber) {
            Mail::send([], [], function($message) use ($subscriber, $text_message)
            {
                $message->to($subscriber->email);
                $message->subject('Welcome');
                $text_message = str_replace('{NAME}', $subscriber->name, $text_message);
                $message->setBody($text_message);
                $message->from('alonasoroka1993@gmail.com');
            });
        }
        return view('home', compact('subscribers', 'data'));
    }




}
