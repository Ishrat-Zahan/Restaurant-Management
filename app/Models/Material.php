<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,'unit','quantity'    
    ];

    public function purches_details()
    {
        return $this->hasMany(Purches_details::class);
    }
}
