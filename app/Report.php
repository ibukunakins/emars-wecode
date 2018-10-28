<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['serial', 'user_id', 'pollingunit_id', 'reporttype_id', 'isConfirmed', 'admin_id'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function reporttype(){
        return $this->belongsTo('App\ReportType');
    }
    
    public function pollingunit(){
        return $this->belongsTo('App\PollingUnit');
    }
    
    public function admin(){
    
    }
    
}
