<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'lot_id',
        'photo_name'
    ];

    public function lot()
    {
        return $this->belongsTo(LotItem::class, 'lot_id', 'id');
    }
}
