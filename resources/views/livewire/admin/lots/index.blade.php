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
            
        
    
    
        <form action="{{route('lots.index')}}" method="get">
            <div class="w-2/3 h-10 pl-3 pr-2 m-2 bg-white   flex justify-between items-center relative">
              <input type="search" name="search" id="search" placeholder="Search"
                     class="appearance-none w-full outline-none focus:outline-none active:outline-none"
                     value="{{request()->query('search')}}"
                     />
              <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" class="w-6 h-6">
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </button>
            </div>
          </form>
         <div class="px-5 m-2">
            <sub>Tips: <span class="font-italic">If you want to search published lot items, type 1, for Archived, type 0</span></sub>     
        </div>    
          @forelse ($lots as $lot)
    
@empty
    No results found  {{request()->query('search')}}
    
@endforelse
   

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    
                    <th>Lot No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Lot Ref. No</th>
                    <th>Artist</th>
                    <th>Status</th>
                   
                    <th>Updated</th>
                    <th>Created</th>
              
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach($lots as $lot)
                <tr>
              
                    <td>{{ $lot->id }}</td>
                    <td>
                        @if ($lot->lot_thumbnail!=null)
                        <img src="{{ asset($lot->lot_thumbnail) }}" alt=""  style="width: 70px; height:70px;">
                        @else
                            No Image
                        @endif
                       
                    </td>
                    <td>{{ $lot->title }}</td>
                    <td>{{ $lot->lot_ref }}</td>
                    <td>{{ $lot->artist }}</td>
                    <td>

                        @if ($lot->status===1)
                            Published
                        @else
                            Archived
                        @endif

                    </td>
                    <td>{{ $lot->updated_at->diffForHumans() }}</td>
                    <td>{{ $lot->created_at->diffForHumans() }}</td>
                  
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
        <div class="px-5 text-xl font-bold">{{$lots->links()}}</div>
    </div>
    
    </x-app-layout>