<?php

namespace App\Repositories;
use App\Subscribers;

class SubscribersRepository
{

    public static function save($subscriber)
    {
        Subscribers::create($subscriber);
    }

    public static function all()
    {
        return Subscribers::all();
    }

    public static function search($data)
    {
        return Subscribers::whereBetween('created_at', $data)->get();
    }
}