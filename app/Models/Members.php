<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'name', 'dob', 'email',
        'designation', 'gender',
        'mblno', 'street', 'city',
        'state', 'country', 'company-add',
        'Additional-Info', 'hospital_associated_with',
        'area_of_expertise'
    ]; //columns in database
    protected $primaryKey = 'id';
}