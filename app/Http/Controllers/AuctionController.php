<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search=request()->query('search');
        if($search){
          $auction=  Auction::where('name','LIKE',"%{$search}%")
            ->orWhere('description','LIKE',$search)
            ->orWhere('created_at','LIKE',$search)
            ->orWhere('updated_at','LIKE',$search)
    
            ->orderBy('id','DESC')->latest()->paginate(10);
        }else{
            $auction = Auction::latest()->paginate(10);
        }
       
        return view('livewire.admin.auction.index',compact('auction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livewire.admin.auction.create-auction');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $storeData = $request->validate([
            'name' => 'required',
            'description' => 'required'
           
        ]);
        $auction = Auction::create($storeData);

        return redirect('/admin/auction')->with('completed', 'Auction has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $auction = Auction::findOrFail($id);
        return view('livewire.admin.auction.update-auction', compact('auction'));
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
        //
        $updateData = $request->validate([
            'name' => 'max:50',
            'description' => 'max:1055'
            ,
        ]);
        // dd($updateData);
        Auction::whereId($id)->update($updateData);
        return redirect()->route('auction.index')->with('success','Auction updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auction = Auction::findOrFail($id);
        $auction->delete();

        return redirect('/admin/auction')->with('completed', 'Auction has been deleted');
    }
}
