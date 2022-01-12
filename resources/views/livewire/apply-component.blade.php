
<x-guest-layout>



    <div class="flex justify-center">
        <div class="w-8/12  p-5 rounded-lg mb-6">
           
            <h1 class="font-light text-xl">Hi,
                @auth
                <span class="font-bold text-2xl">{{ucfirst(Auth::user()->name)}}</span></h1> 
            @endauth
    
    <h1> Would you like to Apply For memebership?</h1>
    <h3>Please fill out the form to be a seller/buyer!</h3>
    </div>
    </div>

    <div class="flex justify-center">
        <div class="w-8/12 bg-white shadow-2xl p-5 rounded-lg mb-6">

            <form action="{{ route('application.store') }}" method="post" class="mb-4" enctype="multipart/form-data">

                @csrf
                <div class="mb-4">
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Apply As<span class="text-danger">*</span></h5>
                        <div class="controls ">
                            <select class="custom-select  bg-gray-100 rounded" aria-label="Default select example" name="type">
                                <option selected>Select Membership Type</option>
                              
                                    <option value="Seller">I want to become a Seller</option>
                                    <option value="Buyer">I want to become a Buyer</option>
                                

                               
                            </select>
                        </div>
                        @error('type')
                            <span class="alert text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                </div>
                <label for="image">Upload Government Photo ID</label>
                <sub>(We only accept Government Issued Photo ID)</sub>
                              <div class="mb-4">
                                <label for="image" class="sr-only">Government Photo ID</label>
                            <input type="file" name="image" class="form-control bg-gray-100 border-2 w-2/3 p-4 rounded-lg @error('image') border-red-500 @enderror" placeholder="Upload Photo ID">
                            @error('image')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                            </div>

                            <label for="contact">Contact Number</label>
                            <sub>(Our evaluation team will contact you at this number)</sub>
                            <div class="mb-4">
            
                                <label for="contact" class="sr-only">contact</label>
            
                                <input type="text" name="contact" id="contact"
                                 class="bg-gray-100 border-2 w-2/3 p-4 rounded-lg @error('contact') border-red-500 @enderror" placeholder="your contact">
            
                                
                                
                                @error('contact')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
            
            
                            </div>

                            <label for="about" >Tell us a bit about yourself (interests,passion etc)</label>                      
                <div class="mb-4">

                    <label for="about" class="sr-only">Tell us a bit about yourself(intersts,passion etc)</label>

                    <input type="text" name="about" id="about" class="bg-gray-100 border-2 w-2/3 p-4 rounded-lg @error('about') border-red-500 @enderror" placeholder="About Yourself">

                    
                    
                    @error('about')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror


                </div>


                            <label for="address">Full address(without Post Code)</label>

                         
                <div class="mb-4">

                    <label for="address" class="sr-only">Address</label>

                    <input type="text" name="address" id="address" class="bg-gray-100 border-2 w-2/3 p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="your Address">

                    
                    
                    @error('address')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror


                </div>

                
                <label for="postcode">Post Code(ZIP Code)</label>
                <div class="mb-4">

                    <label for="postcode" class="sr-only">Post Code</label>

                    <input type="text" name="postcode" id="postcode" class="bg-gray-100 border-2 w-2/3 p-4 rounded-lg @error('postcode') border-red-500 @enderror" placeholder="your postcode">

                    
                    
                    @error('postcode')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror


                </div>
                 
                <label for="country">Country</label>
                <div class="mb-4">

                    <label for="country" class="sr-only">Country</label>

                    <input type="text" name="country" id="country" class="bg-gray-100 border-2 w-2/3 p-4 rounded-lg @error('country') border-red-500 @enderror" placeholder="your country">

                    
                    
                    @error('country')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror


                </div>


                <div>
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Apply</button>
                </div>
            </form>
        </div>

    </x-guest-layout>

			
			