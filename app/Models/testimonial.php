<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $table = 'testimonial';
    protected $fillable = ['testimonialby', 'description', 'designation', 'timage']; //columns in database
    protected $primaryKey = 'id';
}