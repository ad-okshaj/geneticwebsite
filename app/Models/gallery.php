<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = ['imagetitle', 'description', 'galleryimage']; //columns in database
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}