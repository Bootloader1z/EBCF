<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'amount',
        'date',
        'description',
        'receipt',
    ];

    // Define relationships here if any
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
