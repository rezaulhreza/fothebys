<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Category as ModelsCategory;

class Category extends Component
{

    


    public function index()
    {
        $search=request()->query('search');
        if($search){
          $category=  ModelsCategory::where('name','LIKE',"%{$search}%")
            ->orWhere('description','LIKE',$search)
            ->orWhere('created_at','LIKE',$search)
            ->orWhere('updated_at','LIKE',$search)
    
            ->orderBy('id','DESC')->latest()->paginate(10);
        }else{
            $category = ModelsCategory::latest()->paginate(10);
        }
       
        return view('livewire.admin.category.index',compact('category'));
    }




    public function create()
    {
        return view('livewire.admin.category.create-category');
    }
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
           
        ]);
        $category = ModelsCategory::create($storeData);

        return redirect('/admin/category')->with('completed', 'Category has been saved!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = ModelsCategory::findOrFail($id);
        return view('livewire.admin.category.update-category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'max:50',
            'description' => 'max:1055'
            ,
        ]);
        // dd($updateData);
        ModelsCategory::whereId($id)->update($updateData);
        return redirect()->route('category.index')->with('success','Post updated successfully');
    }

    public function destroy($id)
    {
        $category = ModelsCategory::findOrFail($id);
        $category->delete();

        return redirect('/admin/category')->with('completed', 'Student has been deleted');
    }



}
