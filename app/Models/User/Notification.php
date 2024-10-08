<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'status', 'text', 'read_at', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
