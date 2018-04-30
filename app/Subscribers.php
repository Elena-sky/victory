<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribers extends Model
{

    protected $table = 'Subscribers';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'created_at',
    ];
}
