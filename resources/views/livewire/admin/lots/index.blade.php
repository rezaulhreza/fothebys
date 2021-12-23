<x-app-layout>


    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'Manage Lot'}}
    </div>
    
    <div>
      
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <a href="{{route('lots.create')}}"  class="no-underline text-white"> 
    
        <button class="bg-green-600 items-center hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-red-100 hover:border-purple-300 rounded">
            Create
          </button>
    
        </a>
            
        
    
    
        
      
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    
                    <th>Lot No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Lot Ref. No</th>
                    <th>Artist</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lots as $lot)
                <tr>
                    <td>
                        <img src="{{ asset($lot->lot_thumbnail) }}" alt=""  style="width: 70px; height:70px;">
                    </td>
                    <td>{{ $lot->id }}</td>
                    <td>{{ $lot->title }}</td>
                    <td>{{ $lot->lot_ref }}</td>
                    <td>{{ $lot->artist }}</td>
                    {{-- <td>{!! $faq->answer !!}</td>
                    <td>{{ $faq->created_at->diffForHumans() }}</td>
                    <td>{{ $faq->updated_at->diffForHumans() }}</td> --}}
                    <td>
                        <a href="{{ route('lots.edit', $lot->id)}}" class="btn bg-purple-900 text-white btn-sm">Edit</a>
                    <form action="{{ route('lots.destroy', $lot->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </td>
                </tr>
                @endforeach
                {{-- {{ $lot->links() }} --}}
            </tbody>
        </table>
    </div>
    
    </x-app-layout>