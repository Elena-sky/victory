<?php

namespace App\Repositories;
use App\Subscribers;

class SubscribersRepository
{

    /**
     * Store a newly created resource in storage.
     *
     * @param $subscriber
     */
    public static function save($subscriber)
    {
        Subscribers::create($subscriber);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function all()
    {
        return Subscribers::all();
    }

    /**
     * Display the specified resource.
     *
     * @param $data
     * @return mixed
     */
    public static function search($data)
    {
        return Subscribers::whereBetween('created_at', $data)->get();
    }
}