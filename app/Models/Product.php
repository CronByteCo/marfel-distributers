<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code',
        'price',
        'stock_in',
        'image',
        'category_id',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
