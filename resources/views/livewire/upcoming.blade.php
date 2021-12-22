
                @foreach ($upcoming as $lot)
                
                    
                
                <div
                class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center"
              >
                <div class="bg-white rounded-sm mt-5">
                  <img
                  src="{{asset('photos/sample.jpeg')}}"
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
