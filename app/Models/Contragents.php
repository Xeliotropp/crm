<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contragents extends Model
{
    use HasFactory;

    protected $fillable = [
        'contragent',
        'company_identifier',
        'contact_person',
        'phone_number',
        'additional_information',
        'commision_percentage'
    ];
}
