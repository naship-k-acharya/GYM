<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address', 'phone', 'message'];
    protected $attributes = [
        'agree' => false,
    ];
}
