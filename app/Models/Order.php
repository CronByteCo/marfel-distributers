<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'distributor_id',
        'contact_number',
        'shipping_address',
        'ordered_date',
        'shipped_date',
        'received_date',
    ];
}
