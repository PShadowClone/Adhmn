<?php

namespace Core\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{


    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'settings';

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
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
