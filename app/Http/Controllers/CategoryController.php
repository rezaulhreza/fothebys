<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LotItem;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {

        $interesting=LotItem::inRandomOrder()->limit(8)->get();
        $categories = Category::latest()->paginate(6);
        // $related=LotItem::skip(0)->take(10)->get()->where('category_id',$lot->category_id);
        return view('livewire.categories',['categories'=>$categories,'interesting'=>$interesting]);
    }

    

}
