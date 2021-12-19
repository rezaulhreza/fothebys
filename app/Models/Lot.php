<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lot extends Model
{
    use HasFactory;

    // protected $table='lots';
  
    protected $fillable= [

        'title','category_id','lot_ref','artist','year','subject'
        ,'description',
        'additional_information','
        estimated_price',
        'location',
        'auction_period',
        'start_date',
        'end_date',
        'bid',
        'has_availability'
    ];
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class,'product_id', 'id');
    }


}
