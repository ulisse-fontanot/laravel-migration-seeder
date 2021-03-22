<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nome','cognome','citta','data_di_nascita'
    ];
}
