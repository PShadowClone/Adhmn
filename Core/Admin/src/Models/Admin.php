<?php

namespace Core\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{


    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'admins';

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
