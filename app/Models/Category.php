<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'category_id',
        'category_title',
        'category_description',
        'category_status',
    ];
}
