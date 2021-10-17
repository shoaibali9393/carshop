<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable=[
      'name',
      'price',
      'color',
        'category_id',
        'slug',
        'featured_image',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
