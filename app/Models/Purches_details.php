<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purches_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'purches_id','material_id','quantity'     
    ];

    public function purches()
    {
        return $this->belongsTo(Purches::class);
    }
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

}
