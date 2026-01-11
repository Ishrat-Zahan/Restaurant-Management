<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tab extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  'capacity'     
    ];

    public function off_orders()
    {
    return $this->hasMany(off_order::class);
    }
}
