<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        "dateOfMeasurement",
        "mk",
        "mkcold",
        "osv",
        "osvEvak",
        "sh",
        "shobSgr",
        "shokolSr",
        "vent",
        "klim",
        "f0",
        "z",
        "m",
        "izol",
        "dtz",
        "wayOfShowingDocumentation",
        "courrierDetails",
        "certificateNumber",
        "certificateDate",
        "nextMeasurement",
        "mkNext",
        "mkcoldNext",
        "osvNext",
        "osvEvakNext",
        "shNext",
        "shobSgrNext",
        "shokolSrNext",
        "ventNext",
        "klimNext",
        "f0Next",
        "zNext",
        "mNext",
        "izolNext",
        "dtzNext",
        "invoice",
        "payment_method",
        "invoice_date",
        "price_without_vat",
        "paid",
        "contragent_sum",
        "total_sum",
        "client",
        "client_address_1",
        "client_address_2",
        "client_address_3",
        "client_address_4",
        "contragent",
    ];
    public function client(){
        return $this->belongsTo(Clients::class, 'client_id', 'id');
    }
}
