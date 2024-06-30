<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        "dateOfMeasurement",
        "mk",
        "osv",
        "sh",
        "vent",
        "klim",
        "f0",
        "z",
        "m",
        "izol",
        "dtz",
        "wayOfShowingDocumentation",
        "certifacateNumber",
        "certifacteDate",
        "nextMeasurment",
        "mkNext",
        "osvNext",
        "shNext",
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
        "total_sum"
    ];
}
