<x-app-layout>


    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'Manage FAQs'}}
    </div>
    
    <div>
      
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <a href="{{route('faqs.create')}}"  class="no-underline text-white"> 
    
        <button class="bg-green-600 items-center hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-red-100 hover:border-purple-300 rounded">
            Create
          </button>
    
        </a>
            
        
    
    
        
      
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faqs as $faq)
                <tr>
                    
                    <td>{{ $faq->question }}</td>
                    <td>{!! $faq->answer !!}</td>
                    <td>{{ $faq->created_at->diffForHumans() }}</td>
                    <td>{{ $faq->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('faqs.edit', $faq->id)}}" class="btn bg-purple-900 text-white btn-sm">Edit</a>
                    <form action="{{ route('faqs.destroy', $faq->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </td>
                </tr>
                @endforeach
                {{ $faqs->links() }}
            </tbody>
        </table>
    </div>
    
    </x-app-layout>