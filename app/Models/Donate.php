<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    //
    protected $table = 'donates';
    protected $fillable = ['sector', 'name', 'address','email','contact','amount']; //columns in database
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];
}