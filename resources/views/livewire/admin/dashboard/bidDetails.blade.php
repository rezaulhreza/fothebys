<x-app-layout>

    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'View bid Details'}}
    </div>
    <div class="mt2-">
        

           <div class="min-h-screen flex items-center justify-center px-4">
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Bid Information
            </h2>
            <p class="text-sm text-gray-500">
                Infromation related to bid
            </p>
        </div>
        <div>
            <form method="post" action="{{ route('bidDetails.update', $bid->id) }}">
                @csrf
                @method('PATCH')
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Bid No.
                </p>
                <p> 
                    {{Str::ucfirst($bid->id)}}
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                   Lot No
                <p> {{$bid->lot_item_id}}
                    
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Bidder Name
                </p>
                <p> {{Str::ucfirst($bid->user->name)}}
                   
                 
                </p>
            </div>
  
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Email Address
                </p>
                <p> {{Str::ucfirst($bid->user->email)}}
                
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                   Bid Amount
                </p>
                <p> £ {{Str::ucfirst($bid->price)}}
                   
                 
                </p>
            </div>
            
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
               Bid Made
                </p>
                <p>
                    {{Str::ucfirst($bid->created_at->diffForHumans())}}
                </p>
            </div> 


            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   Status
                </p>
                <p>
                    <select class="custom-select" aria-label="Default select example" name="is_active">
                        <option selected>@if ($bid->is_active===1)
                           Won
                        @else
                           Not Won
                        @endif</option>
                     
                        <option value="1">Mark Winner</option>
                        <option value="0">Not winner</option>
                    </select>
                    @error('is_active')
                        <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                    <button class="mb-2 md:mb-0 bg-green-400 px-5 m-2 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Update</button>
                   
                </p>
            </div>
        </form>
           <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <form method="post" action="{{ route('bidDetails.destroy', $bid->id) }}">
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