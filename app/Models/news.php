<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['id', 'newshead', 'description', 'newsdate', 'flyer'];
    protected $PrimaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}