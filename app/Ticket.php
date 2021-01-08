<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['user_id','depature_date','arrival_date','country','hotel'];
    public function users(){
        return $this->belongsTo(Ticket::class);
    }
}
