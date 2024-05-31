<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable =[
        'object_address',
        'date_of_measurement',
        'parameters',
        'way_of_giving_information',
        'certificate_number',
        'certificate_date',
        'certificate_validity',
        'reminder'
    ];
}
