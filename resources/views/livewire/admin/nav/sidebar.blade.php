
         <aside id="sidebar" class="fixed bg-white hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
            <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-red-200 text-white pt-0">
               <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                  <div class="flex-1 px-3 bg-red-300 text-white divide-y space-y-1">
                     <ul class="space-y-2 pb-2">
                        <li>
                           <form action="#" method="GET" class="lg:hidden">
                              <label for="mobile-search" class="sr-only">Search</label>
                              <div class="relative">
                                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                 </div>
                                 <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-white   text-lg text-sm rounded-sm focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                              </div>
                           </form>
                        </li>

                        <li>
                           <a href="{{route('admin.account')}}" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                              <img class="inline object-cover relative rounded-lg
                  shadow-sm
                  w-6 h-6 " src="{{asset('photos/avatar.jpg')}}
                  " alt="">
                              <span class="ml-3 text-xl">{{Auth::user()->name}}</span>
                           </a>
                        </li>


                        <li>
                           <a href="/admin/dashboard" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                     
                              <span class="ml-3">
                                 <img class="w-6 h-6" src="https://img.icons8.com/external-soft-fill-juicy-fish/60/000000/external-website-graphs-and-charts-soft-fill-soft-fill-juicy-fish.png"/>
                                 Dashboard</span>
                           </a>
                        </li>
                     
                        <li>
                           <a href="{{route('category.index')}}" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                     
                              <span class="ml-3">
                                 <img class="w-6 h-6" src="https://img.icons8.com/nolan/64/opened-folder.png"/>
                              
                              Manage Category</span>
                           </a>
                        </li>

                        {{-- <li>
                           <a href="{{route('products.index')}}" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                     
                              <span class="ml-3">
                                 <img class="w-6 h-6" src="https://img.icons8.com/external-bearicons-gradient-bearicons/64/000000/external-faq-frequently-asked-questions-faq-bearicons-gradient-bearicons-9.png"
                                 />
                              
                              Manage Products</span>
                           </a>
                        </li> --}}
                        <li>
                           <a href="{{route('lots.index')}}" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                     
                              <span class="ml-3">
                                 <img class="w-6 h-6" src="https://img.icons8.com/external-flat-geotatah/64/000000/external-auction-stock-market-flat-flat-geotatah.png"/>
                              Manage Lots</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{route('faqs.index')}}" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                     
                              <span class="ml-3">
                                 <img class="w-6 h-6" src="https://img.icons8.com/color-glass/48/000000/faq.png"/>
                              
                              Manage FAQs</span>
                           </a>
                        </li>
                        <li>
                           <a href="{{route('admin.account')}}" class="text-base text-white   text-lg font-normal rounded-sm flex items-center p-2 hover:bg-purple-500group">
                           
                     
                              <span class="ml-3">
                                 <img  class="w-6 h-6" src="https://img.icons8.com/external-vitaliy-gorbachev-blue-vitaly-gorbachev/60/000000/external-setting-internet-technology-vitaliy-gorbachev-blue-vitaly-gorbachev.png"
                                 />
                              Account Settings</span>
                           </a>
                        </li>
                     </ul>
                     <div class="space-y-2 pt-2">

                        <form action="{{ route('logout') }}" method="post" 
                           
                        class="text-base text-white   text-lg font-normal rounded-sm hover:bg-purple-500flex items-center p-2 group ">


                           @csrf


                                    <button type="submit"><img class="h-8 w-8" src="https://img.icons8.com/nolan/64/exit.png"/></i></button>
                                    <p>Logout</p>
                                    

                        </form>
                        
                        <button class="bg-purple-900 text-white p-2 rounded-lg m-2">
                        <div class="text-white no-underline font-normal rounded-sm hover:no-underline hover:bg-purple-500flex items-center p-2 group ">
         <a class=" text-lg no-underline font-bold flex items-center lg:ml-2.5" href="/">View as an User</a>
         </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </aside>
 <div class="bg-white opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>