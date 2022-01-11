<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>Fothebys - Admin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">

       
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
        

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
     

      @auth 
      @if(auth()->user()->role=='admin')
           
      
        <div>


            @livewire('navigation-menu')

            <div class="pt-6 px-4">
            
            <div class="flex overflow-hidden bg-white pt-16">
     

                 <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @include('layouts.footer')
        </div>
        </div>
        </div>
        </div>

        @else
        Access Denied
        @endif 
        @endauth
        

        @stack('modals')
 <script async defer src="https://buttons.github.io/buttons.js"></script>
   <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
   <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

   <script type="text/javascript">
       $(function() {
          $('#CalendarDateTime').datetimepicker();
       });
   </script>    
        @livewireScripts
    </body>
</html>
