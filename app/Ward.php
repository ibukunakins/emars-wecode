<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $fillable = ['serial', 'lga_id'];
    
    public function lga(){
        return $this->belongsTo('App\Lga');
    }
}
