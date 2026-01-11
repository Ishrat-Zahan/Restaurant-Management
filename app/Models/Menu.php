<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'details',
        'price',
        'quantity',
        'discount',
        'active',
        'status',
        'featured',

    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function off_order_details()
    {
        return $this->hasMany(off_order_details::class);
    }

    public function order_details()
    {
        return $this->hasMany(Order_details::class);
    }
}
