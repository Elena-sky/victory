<?php

namespace App\Repositories;
use App\Subscribers;

class SubscribersRepository
{

    public static function save($subscriber)
    {
        Subscribers::create($subscriber);
    }
}