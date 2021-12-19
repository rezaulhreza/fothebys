
              
          <div>   
              <div class="px-10 mt-5">
                <span class="uppercase font-bold text-2xl "
                  >Online Auctions</span
                >
              </div>

              <div class="relative p-2 m-2 object-right">
                {{ $lots->links() }}
               </div>

               
              <div class="px-10 grid grid-cols-4 gap-4">
              @foreach ($lots as $lot)
              
                  
              
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
                          {{$lot->estimated_price}} GBP
                        </div>
                      
                      <div class="text-sm text-gray-600 font-light">
                        <div class="text-lg text-gray-600 font-light">
                          <strong>Ends in </strong>  
                        </div>
                      {{ \Carbon\Carbon::parse($lot->end_date)->diffForHumans() }}
                      </div>
                      </div>
                    </div>
                    <a href="{{route('lot.details')}}" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                      View
                    </a>
                  </div>
                </div>
              </div>

                @endforeach
                
              </div>


            
          </div>
              <div class="px-10 mt-5">
                <span class="uppercase font-bold text-2xl "
                  >Upcoming Auctions</span
                >
              </div>
              <div class="px-10 grid grid-cols-4 gap-4">
               
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
                    <span class="font-bold text-gray-800 text-lg">Monalisa</span>
                    <div class="flex items-center justify-between">
                      <div class="text-sm text-gray-600 font-light">
                        Category : <strong>Painting</strong>
                      </div>
                      <div class="text-lg  font-bold">
                        £450,000
                      </div>
                    </div>
                    <a href="/" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                      View
                    </a>
                  </div>
                </div>

                
              </div>
              <!-- end cols -->

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
                  <span class="font-bold text-gray-800 text-lg">Monalisa</span>
                  <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-600 font-light">
                      Category : <strong>Painting</strong>
                    </div>
                    <div class="text-lg  font-bold">
                      £450,000
                    </div>
                  </div>
                  <a href="/" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                    View
                  </a>
                </div>
              </div>

              
            </div>
            <!-- end cols -->


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
                <span class="font-bold text-gray-800 text-lg">Monalisa</span>
                <div class="flex items-center justify-between">
                  <div class="text-sm text-gray-600 font-light">
                    Category : <strong>Painting</strong>
                  </div>
                  <div class="text-lg  font-bold">
                    £450,000
                  </div>
                </div>
                <a href="/" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                  View
                </a>
              </div>
            </div>

            
          </div>
          <!-- end cols -->


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
              <span class="font-bold text-gray-800 text-lg">Monalisa</span>
              <div class="flex items-center justify-between">
                <div class="text-sm text-gray-600 font-light">
                  Category : <strong>Painting</strong>
                </div>
                <div class="text-lg  font-bold">
                  £450,000
                </div>
              </div>
              <a href="/" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
                View
              </a>
            </div>
          </div>

          
        </div>
        <!-- end cols -->

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
            <span class="font-bold text-gray-800 text-lg">Monalisa</span>
            <div class="flex items-center justify-between">
              <div class="text-sm text-gray-600 font-light">
                Category : <strong>Painting</strong>
              </div>
              <div class="text-lg  font-bold">
                £450,000
              </div>
            </div>
            <a href="/" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
              View
            </a>
          </div>
        </div>

        
      </div>
      <!-- end cols -->


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
          <span class="font-bold text-gray-800 text-lg">Monalisa</span>
          <div class="flex items-center justify-between">
            <div class="text-sm text-gray-600 font-light">
              Category : <strong>Painting</strong>
            </div>
            <div class="text-lg  font-bold">
              £450,000
            </div>
          </div>
          <a href="/" class="text-lg text-center hover:bg-purple-500 text-white bg-red-600 font-bold  rounded-full font-bold text-white px-4  transition duration-300 ease-in-out mr-6">
            View
          </a>
        </div>
      </div>

      
    </div>
    <!-- end cols -->





                
              </div>





