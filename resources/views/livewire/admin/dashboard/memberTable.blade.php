<div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
    <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full">
       <div class="flex items-center justify-between mb-4">
          <h3 class="text-xl font-bold leading-none text-gray-900">Latest application</h3>
           @if ($applicationCount  > 0)
          
       </div>
       
             @forelse ($applications as $application)
    
             @empty
               
               
             @endforelse
      
       @foreach($applications as $application)
       <div class="flow-root">
          <ul role="list" class="divide-y divide-gray-200">
             <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4 border-2 border-gray-100 m-2 p-2">
                  
                   <div class="flex-1 min-w-0">
                     <p class="text-sm font-medium text-gray-900 truncate">
                        Application No: {{$application->id}}
                      </p>
                      <p class="text-sm font-medium text-gray-900 truncate">
                        Application Type: {{$application->type}}
                      </p>
                      <p class="text-sm font-medium text-gray-900 truncate">
                        Contact: {{$application->contact}}
                      </p>
                      <p class="text-sm text-gray-500 truncate">
                        User Id: {{$application->user_id}}
                      </p>
                      <p class="text-sm text-gray-500 truncate">
                        Status: {{$application->approved}}
                      </p>
                   </div>
                   <div class="inline-flex items-center text-base font-semibold text-gray-900">
                     <p class="text-sm font-light">Applied: {{$application->created_at->diffForhumans()}} </p>
                   
                  </div>
                  <div class="inline-flex items-center text-base font-semibold text-gray-900">
                   
                    <a href="{{ route('applicationDetails.edit', $application->id)}}" class="btn bg-purple-900 text-white btn-sm">View</a>
                 </div>
                </div>
             </li>
  
          </ul>
       </div>
       @endforeach
       @else 
       No applications  
       @endif
       {{ $applications->links() }}
    </div>

 </div>
