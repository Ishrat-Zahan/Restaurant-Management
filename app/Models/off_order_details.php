<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class off_order_details extends Model
{
    use HasFactory;
    protected $fillable = [
        'off_order_id','menu_id','quantity'     
    ];

    public function off_order()
    {
        return $this->belongsTo(off_order::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
