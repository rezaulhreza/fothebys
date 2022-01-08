 <!-- Search Mobile -->
 <div class="relative md:hidden">
    <input type="search" class="mt-1 w-full pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none" placeholder="Search">

    <svg class="h-6 w-6 text-gray-300 ml-2 mt-3 stroke-current absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
  </div>
  <!-- ./ Search Mobile -->

</div>
</div>

<div class="py-6">
<!-- Breadcrumbs -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 pb-8 lg:px-8">
  <div class="flex items-center space-x-2 text-gray-400 text-sm">
    <a href="#" class="hover:underline hover:text-gray-600">Home</a>
    <span>
      <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </span>
    <a href="#" class="hover:underline hover:text-gray-600">{{ Str::ucfirst($lot->category->name) }}</a>
    <span>
      <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </span>
    <a href="#" class="hover:underline hover:text-gray-600">{{ Str::ucfirst($lot->title) }}</a>
 
  </div>
</div>
<!-- ./ Breadcrumbs -->



<div class="grid grid-rows-2 gap-5">

  <div class="row-span-2">
    
    <div class="px-10 grid grid-cols-4 gap-4">
      @foreach($lot->images as $img)
      <div class="flex justify-center static items-center">
        <a class="cursor-pointer" href="#">
          <div class="hover:scale-105 transform transition-all static duration-500">
            <img class="h-25 "
            src="{{ asset($img->photo_name ) }} " alt="image" />
          </div>
        </a>
      </div>
      @endforeach

  
    </div>
  </div>
</div>

<div class="px-10 mt-5 border-t border-red-100 p-8">
  <span class="uppercase font-bold text-xl "
    ><p class="font-light">{{$lot->title}}</p></span
  >
  <p class="font-light">By: {{$lot->artist}}, prodcued in {{$lot->year}}</p>
 
  <p class="font-light">Estimated at: £ {{$lot->minimum}} - £ {{$lot->estimated}}</p>

  <p class="font-light">Auction Ends in: {{ \Carbon\Carbon::parse($lot->end_date)->diffInDays()}} days</p>
  <h1 class="text-xl">Description</h2>
  <p class="font-light">{!!$lot->desc!!}</p>
  Latest Bid:<p class="font-bold text-xl">£ {{$bids}}</p>
 

</div>
<div class="border-b border-red-100">
  


                
  <form action="{{ route('lot.bids',$lot) }}" method="post" class="px-6">
    @csrf
    <label for="price" class="font-nold text-lg">Place Bid</label>
    <input type="text" class="bg-gray-400 rounded-lg p-2 px-2 m-2" name="price">
    @error('price')
    <span class="alert text-danger">{{ $message }}</span>
    @enderror
    <button class="bg-red-700 text-white p-2 m-2 rounded-full">Submit</button>
  </form>



</div>









