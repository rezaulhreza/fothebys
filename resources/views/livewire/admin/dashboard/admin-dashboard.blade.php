
  
       <div class="bg-white shadow rounded-sm">
           <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
                {{ Auth::user()->name }}, Welcome</h1>
       </div>
       {{-- <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
          <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8  2xl:col-span-2">
             <div class="flex items-center justify-between mb-4">
                
                <div class="flex-shrink-0">
                   <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">$45,385</span>
                   <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
                </div>
                <div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                   12.5%
                   <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                   </svg>
                </div>
             </div>
             <div id="main-chart"></div>
          </div>
          <div class="bg-white shadow rounded-sm p-4 sm:p-6 xl:p-8 ">
             <div class="mb-4 flex items-center justify-between">
                <div>
                   <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                   <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
                </div>
                <div class="flex-shrink-0">
                   <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-purple-500rounded-lg p-2">View all</a>
                </div>
             </div>
             <div class="flex flex-col mt-8">
                <div class="overflow-x-auto rounded-sm">
                   <div class="align-middle inline-block min-w-full">
                      <div class="shadow overflow-hidden sm:rounded-sm">
                         <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                               <tr>
                                  <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Transaction
                                  </th>
                                  <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Date & Time
                                  </th>
                                  <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Amount
                                  </th>
                               </tr>
                            </thead>
                            <tbody class="bg-white">
                               <tr>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                     Payment from <span class="font-semibold">Bonnie Green</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 23 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     $2300
                                  </td>
                               </tr>
                               <tr class="bg-gray-50">
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-sm rounded-left">
                                     Payment refund to <span class="font-semibold">#00910</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 23 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     -$670
                                  </td>
                               </tr>
                               <tr>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                     Payment failed from <span class="font-semibold">#087651</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 18 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     $234
                                  </td>
                               </tr>
                               <tr class="bg-gray-50">
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-sm rounded-left">
                                     Payment from <span class="font-semibold">Lana Byrd</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 15 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     $5000
                                  </td>
                               </tr>
                               <tr>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                     Payment from <span class="font-semibold">Jese Leos</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 15 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     $2300
                                  </td>
                               </tr>
                               <tr class="bg-gray-50">
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-sm rounded-left">
                                     Payment from <span class="font-semibold">THEMESBERG LLC</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 11 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     $560
                                  </td>
                               </tr>
                               <tr>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                     Payment from <span class="font-semibold">Lana Lysle</span>
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                     Apr 6 ,2021
                                  </td>
                                  <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                     $1437
                                  </td>
                               </tr>
                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div> --}}
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
       <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
          <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full">
             <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold leading-none text-gray-900">Latest Bid</h3>
               <h5>The total amount of bid is <strong>{{$bidCount}} GBP</strong></h5>
             </div>
             {{ $bids->links() }}
             @foreach($bids as $bid)
             <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200">
                   <li class="py-3 sm:py-4">
                      <div class="flex items-center space-x-4 border-2 border-red-900">
                         <div class="flex-shrink-0">
                            
                         </div>
                         <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                             User Ref: {{$bid->user->id}}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate">
                              Lot Ref: {{$bid->lot_item_id}}
                             </p>
                            <p class="text-sm text-gray-500 truncate">
                               <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">Bid amount: £{{$bid->price}}</a>
                            </p>
                         </div>
                         <div class="inline-flex items-center text-base font-semibold text-gray-900">
                            <p class="text-sm font-light">Made: </p>{{$bid->updated_at->diffForhumans()}}
                         </div>
                      </div>
                   </li>
        
                </ul>
             </div>
             @endforeach
          </div>
       </div>







       <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
         <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full"> 

             <div class="flex items-center justify-between mb-4">
               <h3 class="text-xl font-bold leading-none text-gray-900">Latest User</h3>
           
            </div>
            @if ($userCount  > 0)
            {{ $users->links() }} 
            
             @foreach($users as $user)
             <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200">
                   <li class="py-3 sm:py-4">
                      <div class="flex items-center space-x-4 border-2 border-red-900">
                         <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil image">
                         </div>
                         <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                              {{$user->name}}
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                               <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">{{$user->email}}</a>
                            </p>
                         </div>
                         <div class="inline-flex items-center text-base font-semibold text-gray-900">
                            <p class="text-sm font-light">Joined: </p>{{$user->created_at->diffForhumans()}}
                         </div>
                      </div>
                   </li>
        
                </ul>
             </div>
             @endforeach
             @endif
             
          </div>
     
       </div>
   
       <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
         <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full">
            <div class="flex items-center justify-between mb-4">
               <h3 class="text-xl font-bold leading-none text-gray-900">Latest Booking</h3>
                @if ($bookingCount  > 0)
              
            </div>
           
           
            @foreach($bookings as $booking)
            <div class="flow-root">
               <ul role="list" class="divide-y divide-gray-200">
                  <li class="py-3 sm:py-4">
                     <div class="flex items-center space-x-4 border-2 border-red-900">
                       
                        <div class="flex-1 min-w-0">
                           <p class="text-sm font-medium text-gray-900 truncate">
                             {{$booking->reason}}
                           </p>
                           <p class="text-sm text-gray-500 truncate">
                              <a href="#" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">User Id: {{$booking->user_id}}</a>
                           </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900">
                           <p class="text-sm font-light">Status: </p>{{Str::ucfirst($booking->status)}}
                        </div>
                     </div>
                  </li>
       
               </ul>
            </div>
            @endforeach
            @else 
            No bookings  
            @endif
            {{ $bookings->links() }}
         </div>
    
      </div>
