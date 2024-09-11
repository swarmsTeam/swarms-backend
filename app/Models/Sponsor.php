<?php

namespace App\Models;

use App\Models\Event\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'event_id', 'logo'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
