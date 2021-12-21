



<div class=" flex flex-wrap
        items-center
        justify-between
        w-full
        py-4
        md:py-0
        px-4
        text-lg 
        bg-gradient-to-t from-purple-50 via-purple-300 to-purple-50">
          <div  class="font-bold text-sm p-4">
            <img class="inline object-cover w-15 border-red-600 h-12 mr-2 rounded " src="{{asset('photos/logo.jpg')}}" alt="logo">
          </div>
          <div  class=" font-bold text-sm p-4 hover:bg-red-600 transition duration-300">
            <a href="{{route('faq.show')}}"><i class="text-white fas fa-question-circle fa-2x"></i></a>
            <div class="text-white">
              FAQs
            </div>
          </div>

        
        </div>



  {{-- <div class="min-h-screen bg-blue-500 p-20 text-white">
    <p class="text-9xl mt-64">Fixed Bottom Nav!</p>
  </div> --}}
  
  <!-- fixed nav -->
  {{-- <div class="bg-white p-5 text-center rounded-sm mb-6">
    ShareNow
    
    </div> --}}
    {{-- <div> --}}
      

   
      
  <nav  class="fixed h-20 bottom-0 inset-x-0 bg-gradient-to-br from-purple-200 via-purple-400 to-purple-800 rounded-sm flex justify-between  uppercase font-mono mb-0 ">
    {{-- <a href="/" class="w-full block py-5 px-3 text-center hover:bg-red-600 text-lg   text-white transition duration-300">
  <img class="inline object-cover w-15 border-red-600 h-12 mr-2 rounded " src="{{asset('photos/logo.jpg')}}" alt="logo">
  </a> --}}
    
    
    <a href="/" class="w-full py-4
    md:py-2
    px-2 text-center hover:bg-red-600 text-sm  text-white transition duration-300">
        <i class="fas fa-house-user fa-2x"></i><br>
     Home
    </a>

  @auth
  @if (Auth::user()->role=='admin')
  <a href="{{ route('admin.dashboard') }}" wire:click="render" class="w-full block py-4
  md:py-2
  px-2 text-center hover:bg-red-600 text-sm   text-white">
      <i class="fas fa-chart-line fa-2x"></i> <br>
    Dashboard
  </a>
      
  @else
  <a href="{{ route('user.dashboard') }}" wire:click="render" class="w-full block py-4
  md:py-2
  px-2 text-center hover:bg-red-600 text-sm   text-white">
      <i class="fas fa-chart-line fa-2x"></i> <br>
    User Dashboard
  </a>
      
  @endif
  
    
    @endauth


    <a href="{{route('categories')}}" wire:click="render" class="w-full block py-4
    md:py-2
    px-2 text-center hover:bg-red-600 text-sm   text-white">
      <i class="fas fa-gavel fa-2x"></i> <br>
      Categories
    </a>

  

    <a href="/" wire:click="render" class="w-full block py-4
    md:py-2
    px-2 text-center hover:bg-red-600 text-sm   text-white">
      <i class="fas fa-gavel fa-2x"></i> <br>
      Auctions
    </a>

    <a href="/" wire:click="render" class="w-full block py-4
    md:py-2
    px-2 text-center hover:bg-red-600 text-sm   text-white">
     <i class="fas fa-address-card fa-2x"></i> <br>
      About us
    </a>




  
    @auth

 
    
          <button class="text-white py-4 w-full
          md:py-2
          px-2 bg-transparent text-center hover:bg-red-600 text-sm  font-bold uppercase  rounded shadow outline-none focus:outline-none mr-1 mb-1  ease-linear transition-all duration-150" type="button" onclick="openDropdown(event,'dropdown-id')">
          <img class="inline object-cover relative rounded-lg
          shadow-sm
          w-10 h-10 " src="{{asset('photos/avatar.jpg')}}
          " alt=""> 
       <span>{{Auth::user()->name}}</span>
          </button>
          <div class="hidden bg-red-100  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mb-1" style="min-width:12rem" id="dropdown-id">
            <a href="{{ route('user.account') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              <img class="w-5 h-5" src="https://img.icons8.com/nolan/64/settings--v1.png"/><p>Profile Settings</p>
            </a>
            <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              <img class="w-5 h-5" src="https://img.icons8.com/nolan/64/messages-mac.png"/> <p>Messages</p>
            </a>
            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              <img class="w-5 w-5" src="https://img.icons8.com/external-becris-lineal-color-becris/64/000000/external-booking-hotel-service-becris-lineal-color-becris.png"/>Manage Bookings
            </a>
            <div class="h-0 my-2 border border-solid border-t-0 border-blueGray-800 opacity-25"></div>

                    <form action="{{ route('logout') }}" method="post" 
                    
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700 border-red-400  border-t-2"
                    >

    
                        @csrf
                                <button type="submit"><img class="h-8 w-8" src="https://img.icons8.com/nolan/64/exit.png"/></i></button>
                                <p>Logout</p>
 
                    </form>

            </a>
          </div>
     
   
    
   
        
     
      
    </a>
      
  
     
                    
   
    @endauth
 
    @guest

    <a href="{{ route('login') }}" class="w-full block py-4
    md:py-2
    px-2 text-center hover:bg-red-600 text-sm  text-white">
    <i class="fas fa-hand-holding-usd fa-2x"></i> <br>
     Become a seller/Buyer
   </a>

     <a href="{{ route('login') }}" class="w-full block py-4
     md:py-2
     px-2 text-center hover:bg-red-600 text-sm  text-white">
        <i class="fas fa-sign-out-alt fa-2x"></i> <br>
      Login
    </a>
    <a href="{{ route('register') }}" class="w-full block py-4
    md:py-2
    px-2 text-center hover:bg-red-600 text-sm  text-white">
        <i class="fas fa-user-plus fa-2x"></i><br>
      Register
    </a>
    @endguest
  
  </nav>
</div>



<script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script>
      function openDropdown(event,dropdownID){
        let element = event.target;
        while(element.nodeName !== "BUTTON"){
          element = element.parentNode;
        }
        var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: 'top-end'
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }
    </script>
