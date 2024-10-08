<?php

namespace App\Models\Event;

use App\Models\Organizer\Organizer;
use App\Models\Sponsor\Sponsor;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'description', 'start_date', 'end_date', 'time', 'type', 'category', 'booking_link', 'organizer_id'
    ];

    public function goals()
    {
        return $this->hasMany(EventGoal::class);
    }

    public function location()
    {
        return $this->hasOne(EventLocation::class);
    }

    public function speakers()
    {
        return $this->hasMany(EventSpeaker::class);
    }

    public function comments()
    {
        return $this->hasMany(EventComment::class);
    }
    public function scopeFilter(Builder $builder , $filters)
    {
        $options = array_merge([
            'type' => 'free',
            'status' => 'upcoming',
        ],$filters);

        $builder->when($options['type'],function ($builder , $value){
            $builder->where('type',$value);
        });
        $builder->when($options['status'],function ($builder , $value){
            $builder->where('status',$value);
        });
    }

    public function favouriteUsers()
    {
        return $this->belongsToMany(User::class, 'favourite_events')->withTimestamps();
    }

    public function recommended()
    {
        return $this->hasMany(RecommendedEvent::class);
    }

    public function rating()
    {
        return $this->hasOne(RatingEvent::class);
    }

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }



}
