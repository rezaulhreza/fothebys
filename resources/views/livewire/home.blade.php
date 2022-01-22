

<div class="hero bg-gray-50 py-16">
  <!-- container -->
  <div class="
  w-full
  py-4
  md:py-0
  px-4container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
      <!-- hero wrapper -->
      <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">

          <!-- hero text -->
          <div class="hero-text col-span-6">
              <h1 class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">Fotheby's-The best auction house</h1>
              <hr class=" w-12 h-1 bg-orange-500 rounded-full mt-8">
              <p class="text-gray-800 text-base leading-relaxed mt-8 font-semibold">Since 1961...</p>
              <div class="get-app flex space-x-5 mt-10 justify-center md:justify-start">
                  
                  <button class="google bg-gray-100  shadow-lg px-3 py-2 rounded-lg flex items-center space-x-4">
                      <div class="image">
                        <img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-auction-stock-market-wanicon-flat-wanicon.png"/>
                      </div>
                      <div class="text">
                          <p class="text-sm text-gray-600" style="font-size: 0.8rem;">Want to become a seller?</p>
                          <p class="text-lg font-semibold text-gray-900"><a href="{{ route('application.index') }}">Become a member</a></p>
                          <p class="text-sm text-gray-600" style="font-size: 0.8rem;">Today</p>
                      </div>
                  </button>
              </div>
          </div>

          <!-- hero image -->
          <div class="hero-image col-span-4 ">
             <img src="{{asset('photos/hero.png')}}" class="rounded shadow-lg	 w-full min-h" alt="">
          </div>
      </div>
  </div>
</div><!-- end hero -->
      




          
@if ($lotCount>0) 
          <div>   
              <div class="px-10 mt-5">
                <span class="uppercase font-bold text-2xl "
                  >Ongoing Auctions</span
                >
              </div>

              @forelse ($lots as $lot)
    
              @empty
              <div class="px-10 mt-5 text-2xl"></p> No results found for <strong>{{request()->query('search')}}</strong> in Ongoing Auctions!</div>
                  
              @endforelse
                    
                
              <div class="px-10 grid grid-cols-4 gap-4">

          
              @foreach ($lots as $lot)
              
                  
              
                <div
                class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center"
              >
              <div class="bg-white rounded-sm mt-5">
                <img
                src="{{ asset($lot->lot_thumbnail) }}"
                  class="h-40 rounded-md"
                  alt=""
                />
                </div>
                <div class="bg-white shadow-lg rounded-sm -mt-4 w-64">
                  <div class="py-5 px-5">
                    <span class="font-bold text-gray-800 text-lg">{{$lot->title}}</span>
                   <div class="py-5 px-5 text-sm-text-gray-800-font-light">
                    <span>Auction Title: {{Str::ucfirst($lot->auction->name)}}</span>
                   </div>
                    <div class="flex items-center justify-between">
                      <div class="text-sm text-gray-600 font-light">
                    
                       <strong>Category</strong>: <p class="text-sm font-bold">{{$lot->category->name}}</p>
               
                      </div>
                      
                      <div class="text-lg font-bold">
                        <div class="text-lg text-gray-600 font-light">
                          <strong>Estimated </strong>
                        </div>
                        <div class="text-lg text-gray-600">
                          {{$lot->estimated}} GBP
                        </div>
                      
                      <div class="text-sm text-gray-600 font-light">
                        <div class="text-lg text-gray-600 font-light">
                          <strong>Ends in </strong>  
                        </div>
                        <p class="text-xl font-bold">{{ \Carbon\Carbon::parse($lot->end_date)->diffInDays()}}</p> Days
                      </div>
                      </div>
                    </div>
                    <a href="{{ route('lot-specific-details', ['id' => $lot->id, 'lot_ref' => $lot->lot_ref]) }}" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                      View
                    </a>
                  </div>
                </div>
              </div>

                @endforeach
               
              </div>
     
            
          </div>

      
          <div class="px-5 mt-5">{{$lots->links()}}</div>


          
              <div class="px-10 mt-5">
                <span class="uppercase font-bold text-2xl "
                  >Upcoming Auctions</span>
                
              </div>
              

      
              <div class="px-10 grid grid-cols-4 gap-4">
                @foreach ($upcoming as $lot)
                
                    
                
                  <div
                  class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center"
                >
                  <div class="bg-white rounded-sm mt-5">
                    <img
                    src="{{ asset($lot->lot_thumbnail) }}"
                      class="h-40 rounded-md"
                      alt=""
                    />
                  </div>
                  <div class="bg-white shadow-lg rounded-sm -mt-4 w-64">
                    <div class="py-5 px-5">
                      <span class="font-bold text-gray-800 text-lg">{{$lot->title}}</span>
                      <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-600 font-light">
                      
                         <strong>Category</strong>: <p class="text-sm font-bold">{{$lot->category->name}}</p>
                 
                        </div>
                        
                        <div class="text-lg font-bold">
                          <div class="text-lg text-gray-600 font-light">
                            <strong>Estimated </strong>
                          </div>
                          <div class="text-lg">
                            {{$lot->estimated}} GBP
                          </div>
                        
                        <div class="text-sm text-gray-600 font-light">
                          <div class="text-lg text-gray-600 font-light">
                            <strong>Starts </strong>  
                          </div>
                        {{ \Carbon\Carbon::parse($lot->start_date)->diffForHumans() }}
                        </div>
                        </div>
                      </div>
                      <a href="{{ route('lot-specific-details', ['id' => $lot->id, 'lot_ref' => $lot->lot_ref]) }}" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                        View
                      </a>
                    </div>
                  </div>
                </div>
  
                  @endforeach
                     
                </div>
<div class="px-5 mt-5">{{$upcoming->links()}}</div>
                @else 

                <div
                class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col text-center justify-center text-2xl items-center"
              >
We are coming up with interesting lots! Stay Tuned
                @endif
                


