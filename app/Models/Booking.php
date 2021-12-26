<?php

namespace App\Models;

use App\Models\User;
use App\Models\LotItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable= [

        'user_id','desc','contact','reason','address','post_code','status'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
  
}
