<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EventImage;

class events extends Model
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