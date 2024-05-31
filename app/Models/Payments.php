<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'payment_way',
        'sum_without_vat',
        'paid',
        'contragent_commision',
        'contragent_cut',
        'real_sum'
    ];
}
