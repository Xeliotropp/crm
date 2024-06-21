<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'company_identifier',
        'contact_person',
        'phone_number',
        'address',
        'additional_information',
        'object_first',
        'object_second',
        'object_third',
        'object_fourth',
        'adress_object_1',
        'adress_object_2',
        'adress_object_3',
        'adress_object_4',
    ];
}
