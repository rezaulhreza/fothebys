
  
       <div class="bg-white shadow rounded-sm">
           <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
                {{ Auth::user()->name }}, Welcome</h1>
       </div>


       @if (session()->has('message'))
       <div class="container mx-auto mt-10 space-y-5">
         <!-- Alert Success  -->
         <div
           class="flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600 animate-bounce"
         >
           <p class="self-center">
             <strong>Success </strong>{{session('message')}}
           </p>
           <strong class="text-xl align-center cursor-pointer alert-del"
             >&times;</strong
           >
         </div>
       
       
       
        
       </div>

   @endif


       <form action="{{route('admin.dashboard')}}" method="get">
        
         <div class="relative mr-6 my-2">
            <input type="search" name="search" id="search" placeholder="Search"
            class="appearance-none w-full outline-none focus:outline-none active:outline-none"
            value="{{request()->query('search')}}"
            />
  <button type="submit" class="bg-red-500 p-2 m-2 rounded text-white">Search</button>
       
       
       </div>
      </form>
       <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
          <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
             <div class="flex items-center">
                <div class="flex-shrink-0">
                   <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$categoryCount}}</span>
                   <h3 class="text-base font-normal text-gray-500">Categories</h3>
                </div>
          
             </div>
          </div>

          <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$bidCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Bids</h3>
               </div>
               
            </div>
         </div>

         <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$lotCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Total Lots</h3>
               </div>
               
            </div>
         </div>

         <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$applicationCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Total Member Application</h3>
               </div>
              
            </div>
         </div>
         <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$userCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Users</h3>
               </div>
               
            </div>
         </div>

       </div>

       
@include('livewire.admin.dashboard.userTable')
@include('livewire.admin.dashboard.bidTable')

@include('livewire.admin.dashboard.bookingTable')
@include('livewire.admin.dashboard.memberTable')



  <script>var alert_del = document.querySelectorAll('.alert-del');
   alert_del.forEach((x) =>
     x.addEventListener('click', function () {
       x.parentElement.classList.add('hidden');
     })
   );</script>




   
 