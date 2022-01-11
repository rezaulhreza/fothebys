<x-guest-layout>
    <div class="pt-4 bg-gradient-to-br from-purple-200 via-purple-400 to-purple-800">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                  <img class="object-cover w-15 border-red-600 h-12 mr-2 rounded " src="{{asset('photos/logo.jpg')}}" alt="logo">
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-sm prose">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
