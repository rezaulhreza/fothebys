<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LotView extends Model
{
    use HasFactory;

    public static function createViewLog($post) {
        $lotViews= new LotView();
        $lotViews->listing_id = $lot->id;
        $lotViews->url = \Request::url();
        $lotViews->session_id = \Request::getSession()->getId();
        $lotViews->user_id = (\Auth::check())?\Auth::id():null; //this check will either put the user id or null, no need to use \Auth()->user()->id as we have an inbuild function to get auth id
        $lotViews->ip = \Request::getClientIp();
        $lotViews->agent = \Request::header('User-Agent');
        $lotViews->save();//please note to save it at lease, very important
    }
}
