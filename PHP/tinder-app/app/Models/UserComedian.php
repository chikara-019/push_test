<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComedian extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'comedian_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comedian()
    {
        return $this->belongsTo(Comedian::class);
    }
}
