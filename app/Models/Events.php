<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\EventImage;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['id', 'eventname', 'eventtype', 'description', 'eventdate', 'eventvenue', 'eventimage'];
    protected $primaryKey = 'id';
    protected $with = ['images'];
    protected $dates = ['created_at', 'updated_at'];
    public function images()
    {
        return $this->hasMany(EventImage::class, 'event_id');
    }
}