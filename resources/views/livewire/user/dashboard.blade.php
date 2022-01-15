<div class="max-w-2xl mx-auto">

    <div class="px-3 py-2">
      
        <div class="flex flex-col gap-1 text-center">
            <a class=" mx-auto  w-20 h-20" href="{{route('user.account')}}" >
                <img src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" class="rounded-full"></a>
            <p class="font-serif font-semibold">{{Auth::user()->name}}</p>
            <span class="text-sm text-gray-400">{{Auth::user()->email}}</span>
            <span class="text-sm text-gray-400">{{Auth::user()->role}}</span>
          
            <span class="text-sm text-gray-400">Registered</span>
        </div>


   
        <div class="flex justify-center items-center gap-2 my-3">
            <div class="font-semibold text-center mx-4">
                <p class="text-black">7</p>
                <span class="text-gray-400">Saved Items</span>
            </div>
            <div class="font-semibold text-center mx-4">
                <p class="text-black">27</p>
                <span class="text-gray-400">Total Bids</span>
            </div>
            <div class="font-semibold text-center mx-4">
                <p class="text-black">Credit Spent</p>
                <span class="text-gray-400">£500,000</span>
            </div>
        </div>
      

 
        {{-- <div class="flex justify-center gap-2 my-5">
            <button class="bg-pink-500 px-10 py-2 rounded-full text-white shadow-lg">Follow</button>
            <button class="bg-white border border-gray-500 px-10 py-2 rounded-full shadow-lg">Message</button>
        </div>
         --}}

     
        
        <div class="flex justify-between items-center">
            <button class="w-full py-2 border-b-2 border-red-500">
                <h1 class="font-serif font-semibold">Your Interests</h1>
            </button>
            {{-- <button class="w-full py-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                  </svg>
            </button> --}}
        </div>


           <div class="grid grid-cols-3 gap-2 my-3">
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/random/paintings')"></a>
           
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/random/picasso')"></a>
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/monalisa')"></a>
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/venice')"></a>
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/Science')"></a>
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/History')"></a>

                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/Dubai')"></a>
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/Bangladesh')"></a>
                <a class="block bg-center bg-no-repeat bg-cover h-40 w-full rounded-lg" href="" style="background-image: url('https://source.unsplash.com/random')"></a>
           
            </div>

    </div>



</div>