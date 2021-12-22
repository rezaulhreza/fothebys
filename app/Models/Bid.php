<?php

namespace App\Models;

use App\Models\User;
use App\Models\BidItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bid extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function bidItem()
    {
        return $this->hasMany(BidItem::class);
    }
}
