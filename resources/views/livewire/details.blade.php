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
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="flex items-center space-x-2 text-gray-400 text-sm">
    <a href="#" class="hover:underline hover:text-gray-600">Home</a>
    <span>
      <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </span>
    <a href="#" class="hover:underline hover:text-gray-600">{{ Str::ucfirst($lot->category->name) }}</a>

 
  </div>
</div>
<!-- ./ Breadcrumbs -->

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
  <div class="flex flex-col md:flex-row -mx-4">
    <div class="md:flex-1 px-4">
      
      <div x-data="{ image: 1 }" x-cloak>
        <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
          <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
            <span class="text-5xl">1</span>
          </div>

          <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
            <span class="text-5xl">2</span>
          </div>

          <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
            <span class="text-5xl">3</span>
          </div>

          <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
            <span class="text-5xl">4</span>
          </div>
        </div>

        <div class="flex -mx-2 mb-4">
          <template x-for="i in 4">
            <div class="flex-1 px-2">
              <button x-on:click="image = i" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                <span x-text="i" class="text-2xl"></span>
              </button>
            </div>
          </template>
        </div>
      </div>
    </div>
    <div class="md:flex-1 px-4">
      <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">{{Str::ucfirst($lot->title)}}</h2>
      <p class="text-gray-500 text-sm">By <a href="#" class="text-indigo-600 hover:underline">{{$lot->artist}}, {{$lot->year}}</a></p>

      <div class="flex items-center space-x-4 my-4">
        <div>
          <div class="rounded-lg bg-gray-100 flex py-2 px-3">
            <span class="text-indigo-400 mr-1 mt-1">Estimated</span>
            <span class="font-bold text-indigo-600 text-3xl">£ {{$lot->estimated}}</span>
          </div>
        </div>
        <div class="flex-1">
          <p class="text-green-500 text-xl font-semibold">£ 2500000</p>
          <p class="text-gray-400 text-sm">Latest Bid</p>
        </div>
      </div>

      
      @if ($lot->additional==null)
          
      @else
      <p class="text-gray-500">{!!$lot->additional!!}</p>
      @endif

      <form action="">
      <div class="form-group">
        <h5>Bid<span class="text-danger"></span></h5>
        <div class="controls">
            <input type="text" class="bg-gray-200 border-b border-purple-900 rounded px-2 py-2 w-1/3" name="minimum" class="form-control"> <div class="help-block"></div>
        </div>
        {{-- @error('minimum')
            <span class="alert text-danger">{{ $message }}</span>
        @enderror --}}
    </div>
  
      <button class="mb-2 md:mb-0 bg-red-400 px-2 mt-2 text-xl shadow-sm font-medium tracking-wider text-white rounded hover:shadow-lg hover:bg-purple-500" type="submit">Place Bid</button>
 
  </form>
    </div>
  </div>