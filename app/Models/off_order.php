<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class off_order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tab_id',  'total'     
    ];

    public function tab()
    {
        return $this->belongsTo(tab::class);
    }

    public function off_order_details()
    {
    return $this->hasMany(off_order_details::class);
    }
}
