<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Image',
        'Description'
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);//// بتجيب الابناء كلهم
    }
}
