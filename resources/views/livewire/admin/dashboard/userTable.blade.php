       <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
         <div class="bg-white shadow rounded-sm mb-4 p-4 sm:p-6 h-full"> 

             <div class="flex items-center justify-between mb-4">
               <h3 class="text-xl font-bold leading-none text-gray-900">Latest User</h3>
           
            </div>
            @if ($userCount  > 0)
            {{ $users->links() }} 
            <div class="relative mr-6 my-2">
               <input type="search" class="bg-purple-white shadow rounded border-0 p-3" placeholder="Search by name...">
               
        <button type="submit" class="bg-red-500 p-2 m-2 rounded text-white">Search</button>
             
             
             </div>
             @foreach($users as $user)
             <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200">
                   <li class="py-3 sm:py-4">
                      <div class="flex items-center space-x-4 border-2 border-red-900 m-2 p-2">
                         
                         <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                              Name: {{$user->name}}
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                               <a href="mailto:{{$user->email}}" class="__cf_email__" data-cfemail="#">{{$user->email}}</a>
                            </p>
                         </div>
                         <div class="inline-flex items-center text-base font-semibold text-gray-900">
                            <p class="text-sm font-light">Joined: {{$user->created_at->diffForhumans()}} </p>
                          
                         </div>
                         <div class="inline-flex items-center text-base font-semibold text-gray-900">
                          
                           <a href="{{ route('userDetails.edit', $user->id)}}" class="btn bg-purple-900 text-white btn-sm">View</a>
                        </div>
                      </div>
                   </li>
        
                </ul>
             </div>
             @endforeach
             @endif
             
          </div>
     
       </div>