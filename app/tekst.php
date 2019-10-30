<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tekst extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\User','users_id','korisnik_id');   
    }
}