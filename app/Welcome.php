<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    //table name
    protected $table = 'furniture';

    //primary key

    public $primaryKey = 'id';

    //timestamp

    public $timestamp = true;
}
