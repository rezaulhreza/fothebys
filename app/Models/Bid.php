<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable= [

        'user_id','price','lot_item_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function lot()
    {
        return $this->belongsTo(LotItem::class);
    }
}