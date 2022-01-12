<div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
    <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full">
       <div class="flex items-center justify-between mb-4">
          <h3 class="text-xl font-bold leading-none text-gray-900">Latest Bid</h3>
          @if ($bidCount  > 0)
         <h5>Total Bid:<strong>{{$bidCount}}</strong></h5>
       </div>
       {{ $bids->links() }}

       <div class="relative mr-6 my-2">
         <input type="search" class="bg-purple-white shadow rounded border-0 p-3" placeholder="Search by name...">
         
  <button type="submit" class="bg-red-500 p-2 m-2 rounded text-white">Search</button>
       
       
       </div>
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
       @else 
       No Bids
       @endif
    </div>
 </div>