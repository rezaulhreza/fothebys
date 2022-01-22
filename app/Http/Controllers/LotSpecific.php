<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use App\Models\LotItem;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LotSpecific extends Controller
{
    public function lotDetail($id, $lot_ref)
    {

    // $auction = Auction::latest()->get(); 
    $category = Category::latest()->get();
    // $bids = Bid::latest()->get();
    $bids =  DB::table('bids')->select('*')->where('lot_item_id','=',$id)->max('price');
    
    $lot = LotItem::with(['category','bids'])->findOrFail($id);
    $related=LotItem::where('auction_id',$lot->auction_id) ->where('lot_ref', '!=', $lot->lot_ref)->take(5)->get();
    // $related=LotItem::skip(0)->take(8)->get()->where('category_id',$lot->category_id);

        $relatedCount=LotItem::count();
        $lotCount = LotItem::count();
        //return response()->json($product);
        return view('livewire.lot-specific', compact(
            'category','lot','related','bids',
        ));
    }

}
