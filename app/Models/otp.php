<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otp extends Model
{
    use HasFactory;
    protected $fillable = [
        'otp',
        'phone_number',
        'expired_at',
        'use_status'
    ];
}
