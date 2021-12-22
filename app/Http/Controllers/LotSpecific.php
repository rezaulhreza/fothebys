<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LotItem;
use Illuminate\Http\Request;

class LotSpecific extends Controller
{
    public function lotDetail($id, $lot_ref)
    {

        
        $category = Category::latest()->get();
    $lot = LotItem::with(['category'])->findOrFail($id);
    $related=LotItem::where('category_id',$lot->category_id) ->where('lot_ref', '!=', $lot->lot_ref)->take(8)->get();
    // $related=LotItem::skip(0)->take(8)->get()->where('category_id',$lot->category_id);

        $relatedCount=LotItem::count();
        $lotCount = LotItem::count();
        //return response()->json($product);
        return view('livewire.lot-specific', compact(
            'category','lot','related'
        ));
    }

}
