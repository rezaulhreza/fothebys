<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Faq as ModelsFaq;

class FAQ extends Component
{
    public function render()
    {
        $faqs = ModelsFaq::latest()->paginate(10);
        return view('livewire.f-a-q',['faqs'=>$faqs])->layout('layouts.guest');
    }

    
    public function index()
    {

        $faqs = ModelsFaq::latest()->paginate(3);
        return view('livewire.admin.faqs.index',compact('faqs'));
    }

    public function create()
    {
        return view('livewire.admin.faqs.create-faq');
    }
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required|max:1050'
           
        ]);
        //  dd($storeData);
        $faqs = ModelsFaq::create($storeData);

        return redirect('/admin/faqs')->with('completed', 'Faq has been saved!');
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $faqs = ModelsFaq::findOrFail($id);
        return view('livewire.admin.faqs.update-faq', compact('faqs'));
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'question' => 'max:255',
            'answer' => 'max:1050'
            
        ]);
        // dd($updateData);
        ModelsFaq::whereId($id)->update($updateData);
        return redirect()->route('faqs.index')->with('success','FAQ updated successfully');
    }

    public function destroy($id)
    {
        $faqs = ModelsFaq::findOrFail($id);
        $faqs->delete();

        return redirect()->route('faqs.index')->with('completed', 'FAQ has been deleted');
    }


}
