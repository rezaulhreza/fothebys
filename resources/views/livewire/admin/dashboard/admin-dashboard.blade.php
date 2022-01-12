
  
       <div class="bg-white shadow rounded-sm">
           <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
                {{ Auth::user()->name }}, Welcome</h1>
       </div>
      
       <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
          <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
             <div class="flex items-center">
                <div class="flex-shrink-0">
                   <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$categoryCount}}</span>
                   <h3 class="text-base font-normal text-gray-500">Categories</h3>
                </div>
                {{-- <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                   14.6%
                   <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                   </svg>
                </div> --}}
             </div>
          </div>

          <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$bidCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Bids</h3>
               </div>
               {{-- <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                  14.6%
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
               </div> --}}
            </div>
         </div>

         <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$lotCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Total Lots</h3>
               </div>
               {{-- <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                  14.6%
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
               </div> --}}
            </div>
         </div>

         <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$applicationCount}}</span>
                  <h3 class="text-base font-normal text-gray-500">Total Member Application</h3>
               </div>
               {{-- <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                  14.6%
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
               </div> --}}
            </div>
         </div>
         <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
               <div class="flex-shrink-0">
                  <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> {{$userCount-1}}</span>
                  <h3 class="text-base font-normal text-gray-500">Users</h3>
               </div>
               {{-- <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                  14.6%
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
               </div> --}}
            </div>
         </div>

       </div>

       
@include('livewire.admin.dashboard.userTable')
@include('livewire.admin.dashboard.bidTable')

@include('livewire.admin.dashboard.bookingTable')
@include('livewire.admin.dashboard.memberTable')






   
 