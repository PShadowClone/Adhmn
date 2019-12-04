<?php

namespace Core\Country\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * table's primary key
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'code'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
