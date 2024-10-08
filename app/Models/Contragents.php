<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contragents extends Model
{
    use HasFactory;

    protected $fillable = [
        'contragent_name',
        'company_identifier',
        'vat_number',
        'contact_person',
        'phone_number',
        'additional_information',
        'commision_percentage'
    ];
    public function clients() {
        return $this->hasMany(Clients::class, 'contragent_client_id', 'id');
    }
}
