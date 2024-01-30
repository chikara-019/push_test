<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStock extends Model
{
    protected $table = 'users_stocks';

    protected $fillable = [
        'stockid', 'userid'
    ];
}
