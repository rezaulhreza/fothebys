<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('livewire.apply-component');
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
        $request->validate([
           
            'address' => 'required|max:4096',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jiff|max:8048',
            'postcode' => 'required|max:4096',
            'country' => 'required|max:4096',
            'type' => 'required|max:4096',
            'contact' => 'required|max:4096',
        'about' => 'required|max:4096',
    
        ]);
        $user = auth()->user();
        $input =  $request->all();
        $input['user_id'] = auth()->id();
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'upload/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }
        // dd($input);
        Application::create($input);
       
        return view('livewire.booking.success');
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
}
