<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Expense extends Model
{


    protected $fillable = [
        'user_id',
        'category',
        'amount',
        'date',
        'description',
        'receipt',

    ];
    use HasFactory;

    // Define relationships here if any
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
