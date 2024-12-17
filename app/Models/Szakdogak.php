<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szakdogak extends Model
{
    protected $fillable=[
        'szakdoga_neve',
        'githublink',
        'oldallink',
        'tagokneve'
    ];
}
