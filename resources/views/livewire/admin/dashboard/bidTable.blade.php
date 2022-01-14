<div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
    <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full">
       <div class="flex items-center justify-between mb-4">
          <h3 class="text-xl font-bold leading-none text-gray-900">Latest Bid</h3>
          @if ($bidCount  > 0)

       </div>
       {{ $bids->links() }}

      
       @forelse ($bids as $bid)

       @empty
          
           
       @endforelse
       @foreach($bids as $bid)
       <div class="flow-root">
          <ul role="list" class="divide-y divide-gray-200">
             <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4 border-2 border-gray-100 m-2 p-2">
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
                        Bid amount: £{{$bid->price}}
                      </p>
                   </div>
                   <div class="inline-flex items-center text-base font-semibold text-gray-900">
                      <p class="text-sm font-light">Made: </p>{{$bid->updated_at->diffForhumans()}}
                   </div>
                   <a href="{{ route('bidDetails.edit', $bid->id)}}" class="btn bg-purple-900 text-white btn-sm">View</a>
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