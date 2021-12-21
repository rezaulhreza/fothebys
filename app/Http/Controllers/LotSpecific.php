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
        
        //return response()->json($product);
        return view('livewire.lot-specific', compact(
            'category','lot'
        ));
    }

}
