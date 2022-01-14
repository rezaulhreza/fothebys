<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\LotItem;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image as ModelsImage;
use Intervention\Image\Facades\Image;
use App\Http\Requests\LotStoreRequest;

class LotDetails extends Component
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
          $lots=  LotItem::where('title','LIKE',"%{$search}%")
            ->orWhere('artist','LIKE',"%{$search}%")
            ->orWhere('year','LIKE',"%{$search}%")
            ->orWhere('desc','LIKE',"%{$search}%")
            ->orWhere('lot_ref','LIKE',"%{$search}%")
            ->orWhere('category_id','LIKE',$search)
    
            ->orderBy('id','DESC')->get();
        }else{
         $lots = LotItem::with(['category','images'])->latest()->get();
        }
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
        // dd($request->all());
        $lot = LotItem::create([
            
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'lot_ref' => $request->input('lot_ref'),
            'subject' => $request->input('subject'),
            'period' => $request->input('period'),
            'location' => $request->input('location'),
            'artist' => $request->input('artist'),
            'year' => $request->input('year'),
            'minimum' => $request->input('minimum'),
            'estimated' => $request->input('estimated'),
            'additional' => $request->input('additional'),
            'desc' => $request->input('desc'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status')|false
            ]);

            if($request->file('lot_thumbnail')){
                // if($lot->lot_thumbnail !='thumbnail.jpg'){
                //     unlink($lot->lot_thumbnail);
                // }
                $upload_location = 'upload/lots/thumbnail/';
                $file = $request->file('lot_thumbnail');
                $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                Image::make($file)->resize(600,600)->save($upload_location.$name_gen);
                $save_url = $upload_location.$name_gen;

                $lot->update([
                    'lot_thumbnail' => $save_url,
                ]);
            }

            if($request->file('lot_images'))
            {
                $images = $request->file('lot_images');
                foreach ($images as $single_image) {
                    $upload_location = 'upload/lots/multi_images/';
                    $name_gen = hexdec(uniqid()).'.'.$single_image->getClientOriginalExtension();
                    Image::make($single_image)->resize(600,600)->save($upload_location.$name_gen);
                    $save_url = $upload_location.$name_gen;
                    ModelsImage::create([
                        'lot_id' => $lot->id,
                        'photo_name' => $save_url,
                    ]);
                }
            }

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
        // dd($request->all());
        $lot->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'lot_ref' => $request->input('lot_ref'),
            'subject' => $request->input('subject'),
            'period' => $request->input('period'),
            'location' => $request->input('location'),
            'artist' => $request->input('artist'),
            'year' => $request->input('year'),
            'minimum' => $request->input('minimum'),
            'estimated' => $request->input('estimated'),
            'additional' => $request->input('additional'),
            'desc' => $request->input('desc'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'status' => $request->input('status')|false
            ]);
           

            if($request->file('lot_thumbnail')){
                // if($lot->lot_thumbnail !='thumbnail.jpg'){
                //     unlink($lot->lot_thumbnail);
                // }
                $upload_location = 'upload/lots/thumbnail/';
                $file = $request->file('lot_thumbnail');
                $name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
                Image::make($file)->resize(600,600)->save($upload_location.$name_gen);
                $save_url = $upload_location.$name_gen;

                $lot->update([
                    'lot_thumbnail' => $save_url,
                ]);
            }

          

            

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
        $lot = LotItem::findOrFail($id);
       
        $lot->delete();

        $notification = [
            'message' => 'Lot Deleted Successfully!!!',
            'alert-type' => 'success'
        ];
        return redirect()->route('lots.index')->with($notification);
    }

    

    public function changeStatus(Request $request)
    {
        //dd($request->all());
        $lot = LotItem::findOrFail($request->lot_id);
        $lot->status = $request->status;
        $lot->save();

        return response()->json(['success'=>'Lot status change successfully.']);
    }

    public function MultiImageUpdate(Request $request)
    {
        $imgs = $request->multi_img;

		foreach ($imgs as $id => $img) {
	    $imgDel = ModelsImage::findOrFail($id);
	    unlink($imgDel->photo_name);

    	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        $upload_location = 'upload/lots/multi_images/';
    	Image::make($img)->resize(600,600)->save($upload_location.$make_name);
    	$uploadPath = $upload_location.$make_name;

    	ModelsImage::where('id',$id)->update([
    		'photo_name' => $uploadPath,
    		'updated_at' => Carbon::now(),

    	]);

        $notification = array(
			'message' => 'Lot Image Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

	 } 


}
}