<x-guest-layout>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-5 rounded-lg mb-6">
    <h1>Booking</h1>
    </div>
    </div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-5 rounded-lg mb-6">


           
                    <form action="{{ route('booking.store') }}" method="post" class="mb-4" enctype="multipart/form-data">

                    @csrf
                    {{-- <input type="hidden" name="auth()->user()->id"> --}}

                    <div class="mb-4">
                        <label for="reason" class="sr-only">Reason</label>
                       
                        <input type="text" name="reason" class="form-control bg-gray-100" placeholder="Reason">
                    </div>

                    <div class="mb-4">

                        <label for="desc" class="sr-only">Description</label>

                        <textarea name="desc" id="desc" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('desc') border-red-500 @enderror" placeholder="Description!"></textarea>

                        
                        
                        @error('desc')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>

                    <div class="mb-4">
                        <label for="address" class="sr-only">Address</label>
                       
                        <input type="text"  name="address" class="form-control bg-gray-100" placeholder="Address">
                        @error('address')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label for="contact" class="sr-only">Contact</label>
                       
                        <input type="text" name="contact" class="form-control bg-gray-100" placeholder="Contact">
                        @error('contact')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label for="post_code" class="sr-only">Post Code</label>
                       
                        <input type="text" name="post_code" class="form-control bg-gray-100" placeholder="Post Code">
                    </div>
                    <input type="hidden" name="status" value="pending">

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
   
       
        </div>
    </div>

</x-guest-layout>
			
			