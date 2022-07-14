<?php

namespace App\Models;

use App\events;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected $fillable = ['event_id', 'image'];
    public function event()
    {
        return $this->belongsTo(events, 'event_id');
    }
}