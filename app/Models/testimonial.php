<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    protected $fillable = ['testimonialby', 'description', 'designation', 'timage']; //columns in database
    protected $primaryKey = 'id';
}