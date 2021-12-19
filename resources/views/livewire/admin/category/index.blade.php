<x-app-layout>


<div class="bg-white shadow rounded-sm">
    <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
         {{'Manage Category'}}
</div>

<div>
  
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <a href="{{route('category.create')}}"  class="btn no-underline text-white"> 

    <button class="bg-green-600 items-center hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-red-100 hover:border-purple-300 rounded">
        Create
      </button>

    </a>
        
    


    
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                
                <th>Category Name</th>
                <th>Description</th>
                <th>Created</th>
                <th>Updated</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $categories)
            <tr>
                
                <td>{{ $categories->name }}</td>
                <td>{!! $categories->description !!}</td>
                <td>{{ $categories->created_at->diffForHumans() }}</td>
                <td>{{ $categories->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('category.edit', $categories->id)}}" class="btn bg-purple-900 text-white btn-sm">Edit</a>
                <form action="{{ route('category.destroy', $categories->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </td>
            </tr>
            @endforeach
            {{ $category->links() }}
        </tbody>
    </table>
</div>

</x-app-layout>