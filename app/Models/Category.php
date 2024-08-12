<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
    ];

    public function product()
    {
        return $this->hasMany(Product::class,'category_id');
    }
    
} 