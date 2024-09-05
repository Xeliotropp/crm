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
        'vat_number',
        'contact_person',
        'email',
        'phone_number',
        'address',
        'contragent_client_id',
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

    public function contragents(){
        return $this->belongsTo(Contragents::class, 'contragent_client_id', 'id');
    }
    public function objects() {
        return $this->belongsToMany(Objects::class, 'client_object', 'client_id', 'object_id');
    }
}
