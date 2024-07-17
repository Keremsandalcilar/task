<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    
    protected $fillable = [
        'product_title',
        'product_category_id',
        'barcode',
        'product_status',
    ];

}
