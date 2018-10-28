<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    protected $fillable = ['serial', 'ward_id'];
}
