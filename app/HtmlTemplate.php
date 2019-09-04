<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlTemplate extends Model
{
    protected $fillable = [
        'html',	
        'fields'
    ];
}
