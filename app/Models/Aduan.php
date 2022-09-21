<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email' , 'pesan'
    ];
}
