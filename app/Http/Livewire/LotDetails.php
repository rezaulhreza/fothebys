<?php

namespace App\Http\Livewire;

use App\Models\Lot;
use App\Models\LotItem;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\LotStoreRequest;

class LotDetails extends Component
{
    public function render()
    {
        // $single=Lot::where('title',$this->title)->first();
        // $lots = Lot::all();
        $lots=Lot::all();
        return view('livewire.lot-details',['lots'=>$lots])->layout('layouts.guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lots = LotItem::with(['category'])->latest()->get();
        return view('livewire.admin.lots.index',compact('lots'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::latest()->get();
        return view('livewire.admin.lots.create', compact(
            
            'categories',
            
        ));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LotStoreRequest $request)
    {
        //dd($request->all());
        $lot = LotItem::create([
            
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'lot_ref' => $request->input('lot_ref'),
            'artist' => $request->input('artist'),
            'year' => $request->input('year'),
            'minimum' => $request->input('minimum'),
            'estimated' => $request->input('estimated'),
            'additional' => $request->input('additional'),
            'desc' => $request->input('desc'),

            'status' => $request->input('status')|false
            ]);

            
            

        $notification = [
            'message' => 'Lot Created Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('lots.index')->with($notification);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lot = LotItem::with(['category'])->findOrFail($id);
        return response()->json($lot);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $categories = Category::latest()->get();
        
        $lot = LotItem::with(['category'])->findOrFail($id);
        return view('livewire.admin.lots.edit', compact('lot', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lot = LotItem::findOrFail($id);
        $lot->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'lot_ref' => $request->input('product_qty'),
            'artist' => $request->input('product_tags_en'),
            'year' => $request->input('product_tags_bn'),
            'minimum' => $request->input('product_size_en'),
            'estimated' => $request->input('product_size_bn'),
            'additional' => $request->input('product_color_en'),
            'desc' => $request->input('product_color_bn'),

            'status' => $request->input('status')|false
            ]);

           

            

        $notification = [
            'message' => 'Lot Updated Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('lots.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lots = LotItem::findOrFail($id);
        $lots->delete();

        $notification = [
            'message' => 'Product Deleted Successfully!!!',
            'alert-type' => 'success'
        ];

        return redirect()->route('lots.index')->with($notification);
    }

    public function changeStatus(Request $request)
    {
        //dd($request->all());
        $lot = LotItem::findOrFail($request->id);
        $lot->status = $request->status;
        $lot->save();

        return response()->json(['success'=>'Product status change successfully.']);
    }


}
