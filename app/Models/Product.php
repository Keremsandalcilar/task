<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    
    protected $fillable = [
        'id',
        'title',
        'category_id',
        'barcode',
        'stock',
        'price',
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id');
    }
}
