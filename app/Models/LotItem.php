<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class LotItem extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function auction()
    {
        return $this->belongsTo(Auction::class, 'auction_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(Image::class,'lot_id', 'id');
    }
    public function bids()
    {
        return $this->hasOne(Bid::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
