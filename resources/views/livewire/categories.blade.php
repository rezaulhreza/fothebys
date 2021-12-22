<x-guest-layout>

<div class="px-10 mt-5">
    <span class="uppercase font-bold text-2xl "
      >Categories</span
    >
  </div>


  <div class=" p-2 m-2 object-right">
    {{ $categories->links() }}
   </div>

                  <!-- if there is any posts it will return true -->
                  <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                    <div class="flex items-center">
                      
                  @if($categories->count()>0)

                  <!-- for each posts it will display name, date and the body of the posts -->
  
                  @foreach($categories as $category)
  
  
                  <div class="flex-shrink-1">
                    <div class="w-full p-3">
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
                  

          <!-- if there is no posts then it will display the below message -->
            
                  </div>


                 @include('livewire.interesting')

                 @else
  
                 <div
                 class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col text-center justify-center text-2xl items-center"
               >
                Wide range of categories are being introduced soon! Stay Tuned!
     </div>
 
                 @endif

                
                
</x-guest-layout>


