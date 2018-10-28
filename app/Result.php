<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['pya', 'pyb', 'pyc', 'none'];
    
    protected $appends = ['totalVotes'];
}
