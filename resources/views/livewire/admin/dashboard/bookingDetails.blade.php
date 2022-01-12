<x-app-layout>

    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'View booking Details'}}
    </div>
    <div class="mt2-">
        

           <div class="min-h-screen flex items-center justify-center px-4">
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Booking Information
            </h2>
            <p class="text-sm text-gray-500">
                Infromation related to booking
            </p>
        </div>
        <div>
            <form method="post" action="{{ route('bookingDetails.update', $booking->id) }}">
                @csrf
                @method('PATCH')
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Booking No.
                </p>
                <p> 
                    {{Str::ucfirst($booking->id)}}
                 
                </p>
            </div>

            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Name
                </p>
                <p> {{Str::ucfirst($booking->user->name)}}
                   
                 
                </p>
            </div>
  
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Email Address
                </p>
                <p> {{Str::ucfirst($booking->user->email)}}
                
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                  Contact
                </p>
                <p> {{Str::ucfirst($booking->contact)}}
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                  Reason
                </p>
                <p> {{Str::ucfirst($booking->reason)}}
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                  Message
                </p>
                <p> {{Str::ucfirst($booking->desc)}}
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                  Address
                </p>
                <p> {{Str::ucfirst($booking->address)}}, {{Str::ucfirst($booking->post_code)}}
                   
                 
                </p>
            </div>
            
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
               Booking Made
                </p>
                <p>
                    {{Str::ucfirst($booking->created_at->diffForHumans())}}
                </p>
            </div> 


            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   Status
                </p>
                <p>
                    <select class="custom-select" aria-label="Default select example" name="status">
                        <option selected>@if ($booking->status==='pending')
                           Pending
                        @else
                           Approved
                        @endif</option>
                     
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                    </select>
                    @error('status')
                        <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                    <button class="mb-2 md:mb-0 bg-green-400 px-5 m-2 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Update</button>
                   
                </p>
            </div>
        </form>
           <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <form method="post" action="{{ route('bookingDetails.destroy', $booking->id) }}">
                    @csrf
                    @method('DELETE')
            <button class="mb-2 md:mb-0 bg-red-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Delete</button>
        </form>
        </div>
        </div>
        
    </div>


</div>


        
    </div>

</x-app-layout>