<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id','material_id','quantity'     
    ];
}
