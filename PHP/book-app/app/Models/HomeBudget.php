<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBudget extends Model
{
    use HasFactory;

    protected $table = 'home_budgets';

    protected $fillable = [

        'data',
        'category_id',
        'price'
    ];

    protected $casts = [

        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];
}
