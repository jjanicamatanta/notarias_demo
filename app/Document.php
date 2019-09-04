<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function persons()
    {
        return $this->belongsToMany('App\Person');
    }
}
