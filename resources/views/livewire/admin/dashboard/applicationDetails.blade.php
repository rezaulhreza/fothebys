<x-app-layout>

    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'View Application Details'}}
    </div>
    <div class="mt2-">
        

           <div class="min-h-screen flex items-center justify-center px-4">
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Applicant Information
            </h2>
            <p class="text-sm text-gray-500">
                Personal details and application.
            </p>
        </div>
        <div>
            <form method="post" action="{{ route('applicationDetails.update', $application->id) }}">
                @csrf
                @method('PATCH')
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Application No.
                </p>
                <p> 
                    {{Str::ucfirst($application->id)}}
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Applicant's Name
                </p>
                <p> {{Str::ucfirst($application->user->name)}}
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Government issued photo ID
                </p>
             <img src="/upload/{{ $application->image }}" width="Auto" alt="{{$application->image}}">
               
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Email Address
                </p>
                <p> {{Str::ucfirst($application->user->email)}}
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Application Type
                </p>
                <p> {{Str::ucfirst($application->type)}}
                   
                 
                </p>
            </div>
   
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   Full Address
                </p>
                <p>
                    {{Str::ucfirst($application->address)}}, {{Str::ucfirst($application->postcode)}}, {{Str::ucfirst($application->country)}}
                </p>
            </div>
         
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Applied
                </p>
                <p>
                    {{Str::ucfirst($application->created_at->diffForHumans())}}
                </p>
            </div> 
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Contact
                </p>
                <p>
                    {{Str::ucfirst($application->contact)}}
                </p>
            </div>

            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Information provided by the Applicant
                </p>
                <p>
                    {{Str::ucfirst($application->about)}}
                </p>
            </div> 

            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   Approve
                </p>
                <p>
                    <select class="custom-select" aria-label="Default select example" name="approved">
                        <option selected>{{Str::ucfirst($application->approved)}}</option>
                     
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @error('approved')
                        <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                    <button class="mb-2 md:mb-0 bg-green-400 px-5 m-2 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Update</button>
                   
                </p>
            </div>
        </form>
           <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <form method="post" action="{{ route('applicationDetails.destroy', $application->id) }}">
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