<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    protected $fillable = ['name', 'affiliation', 'email', 'committe', 'designation', 'position', 'photo']; //columns in database
    protected $primaryKey = 'id';

}
