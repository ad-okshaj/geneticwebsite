<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
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