<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;

class Objects extends Model
{
    use HasFactory;

    protected $fillable = [
        'object',
        'object_address',
    ];

    public function clients() {
        return $this->belongsToMany(Clients::class, 'client_object', 'object_id', 'client_id');
    }
}
