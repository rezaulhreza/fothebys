<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bid;
use App\Models\BidItem;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bids = Bid::latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
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
    public function show(Bid $bid)
    {
        //
        $bid = Bid::whereId($bid->id)
            ->with(['user'])
            ->first();
        $bidItems = BidItem::where('order_id', $bid->id)
            ->with('lot')
            ->orderBy('id', 'DESC')->get();

        return view('admin.Bids.show', compact(
            'bid',
            'bidItems'
        ));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function pendingBidIndex()
    {
        $bids = Bid::where('status', 'pending')->latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
    }

    public function winnerBidIndex()
    {
        $bids = Bid::where('status', 'won')->latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
    }

    public function processingBidIndex()
    {
        $bids = Bid::where('status', 'processing')->latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
    }



    public function shippedBidIndex()
    {
        $bids = Bid::where('status', 'shipped')->latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
    }

    public function deliveredBidIndex()
    {
        $bids = Bid::where('status', 'delivered')->latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
    }

    public function cancelBidIndex()
    {
        $bids = Bid::where('status', 'cancel')->latest('id')->get();
        return view('admin.Bids.index', compact(
            'bids'
        ));
    }




 


}
