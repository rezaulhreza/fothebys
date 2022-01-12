<div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
    <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full">
       <div class="flex items-center justify-between mb-4">
          <h3 class="text-xl font-bold leading-none text-gray-900">Latest Booking</h3>
           
         
       </div>
       @isset ($bookingCount ) 
       
      
       @forelse ($bookings as $booking)

       @empty
         
           
       @endforelse
       @foreach($bookings as $booking)
       <div class="flow-root">
          <ul role="list" class="divide-y divide-gray-200">
             <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4 border-2 border-gray-100 m-2 p-2">
                  
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
                   <a href="{{ route('bookingDetails.edit', $booking->id)}}" class="btn bg-purple-900 text-white btn-sm">View</a>
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
