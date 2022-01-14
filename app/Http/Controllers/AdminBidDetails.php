<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Bid;
use Illuminate\Http\Request;

class AdminBidDetails extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bid = Bid::with(['user'])->findOrFail($id);
        return response()->json($bid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::latest()->get();
        $user = User::all();
        $bid = Bid::with(['user'])->findOrFail($id);
        return view('livewire.admin.dashboard.bidDetails', compact('bid', 'users','user'));
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
        $updateData = $request->validate([
            'is_active' => 'required',
           
            
        ]);
        //  dd($updateData);
         Bid::whereId($id)->update($updateData);
         $notification = [
            'message' => 'Bid updated Successfully!!!',
            'alert-type' => 'success'
        ];
        return redirect('/admin/dashboard')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bid = Bid::findOrFail($id);
       
        $bid->delete();

        $notification = [
            'message' => 'Bid Deleted Successfully!!!',
            'alert-type' => 'success'
        ];
        return redirect('/admin/dashboard')->with($notification);
    }
}
