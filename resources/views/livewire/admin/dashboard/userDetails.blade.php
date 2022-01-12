<x-app-layout>

    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'View User Details'}}
    </div>
    <div class="mt2-">
        

           <div class="min-h-screen flex items-center justify-center px-4">
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                User Information
            </h2>
            <p class="text-sm text-gray-500">
                Details of <strong> {{Str::ucfirst($users->name)}}</strong>
            </p>
        </div>
        <div>
            <form method="post" action="{{ route('userDetails.update', $users->id) }}">
                @csrf
                @method('PATCH')
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
               
                <p class="text-gray-600">
                    Full name
                </p>
                <p> {{Str::ucfirst($users->name)}}
                   
                 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                   User Type
                </p>
                <p>
                    <select class="custom-select" aria-label="Default select example" name="role">
                        <option selected>{{Str::ucfirst($users->role)}}</option>
                     
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('role')
                        <span class="alert text-danger">{{ $message }}</span>
                    @enderror
                    <button class="mb-2 md:mb-0 bg-green-400 px-5 m-2 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Change Role</button>
                   
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Email Address
                </p>
                <p>
                    {{Str::ucfirst($users->email)}}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Joined
                </p>
                <p>
                    {{Str::ucfirst($users->created_at->diffForHumans())}}
                </p>
            </div>
        </form>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <form method="post" action="{{ route('userDetails.destroy', $users->id) }}">
                    @csrf
                    @method('PATCH')
            <button class="mb-2 md:mb-0 bg-red-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Delete</button>
        </form>
        </div>
        </div>
        
    </div>


</div>


        
    </div>

</x-app-layout>