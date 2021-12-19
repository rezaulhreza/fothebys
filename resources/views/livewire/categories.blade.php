<x-guest-layout>

<div class="px-10 mt-5">
    <span class="uppercase font-bold text-2xl "
      >Categories</span
    >
  </div>


  <div class="relative p-2 m-2 object-right">
    {{ $categories->links() }}
   </div>

                  <!-- if there is any posts it will return true -->
                  <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl  rounded-sm p-4 sm:p-6 xl:p-8 ">
                    <div class="flex items-center">
                      
                  @if($categories->count())

                  <!-- for each posts it will display name, date and the body of the posts -->
  
                  @foreach($categories as $category)
  
  
                  <div class="flex-shrink-0">
                    <div class="w-full p-4">
                      <div class="p-6 rounded-lg bg-white rounded shadow m-3">
                       
                        <h2 class="text-lg  font-medium title-font mb-2">{{$category->name}}</h2>
                        {{-- <p class="leading-relaxed text-base">{!!$category->description!!}</p> --}}

                        <button class="bg-purple-900 text-white rounded h-15 p-3 text-sm">View all items</button>
                        
                       
          
                      </div>
                    </div>
  
                  </div>
                  
        
                <!-- end cols -->
                  
                  @endforeach
  
                  <!-- laravel and tailwind css pagination -->
  
                </div>
                  </div>

          <!-- if there is no posts then it will display the below message -->
                  @else
  
                  No categories yet
  
                  @endif

</x-guest-layout>


