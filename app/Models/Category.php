<?php

namespace App\Models;


use App\Models\LotItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable= [

        'name','description'
    ];
    
    public function lots(){
        return $this->hasMany(LotItem::class,'category_id','id');
    }

    
}
