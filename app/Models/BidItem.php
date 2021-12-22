<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bid()
    {
        return $this->belongsTo(Bid::class)->withDefault();
    }

    public function lot()
    {
        return $this->belongsTo(LotItem::class)->withDefault();
    }
}
