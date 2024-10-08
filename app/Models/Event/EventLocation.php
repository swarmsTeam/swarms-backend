<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventLocation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'event_location';

    protected $fillable = [
        'address', 'latitude', 'longitude', 'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
