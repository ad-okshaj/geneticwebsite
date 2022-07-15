<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Events;


class EventImage extends Model
{
    protected $fillable = ['event_id', 'image'];
    public function event()
    {
        return $this->belongsTo(Events::class, 'event_id');
    }
}