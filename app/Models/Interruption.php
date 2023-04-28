<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interruption extends Model
{
    use HasFactory;
    protected $fillable = [
        'what',
        'dateTime',
        'where',
        'why'
    ];
}

