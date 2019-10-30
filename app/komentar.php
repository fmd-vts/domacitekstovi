<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\User','users_id','korisnik_id');
    }
    public function Tekst()
    {
        return $this->belongsTo('App\tekst','teksts_id','tekst_id');
    }
}
