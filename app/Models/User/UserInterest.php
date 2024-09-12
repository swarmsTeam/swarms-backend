<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'interest', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
