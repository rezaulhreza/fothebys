
<x-app-layout>
    <div class="bg-white  rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'Edit/Update Auction'}}
    </div>

    <div class="grid  gap-8 grid-cols-1">
        <div class="flex flex-col ">
         

               
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div><br />
                    @endif
               


                <div class="mt2-">
                    <form method="post" action="{{ route('auction.update', $auction->id) }}">
                        @csrf
                        @method('PATCH')
                    <div class="form">
                    
                            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class="font-semibold text-gray-600 py-2"><h1>Auction Name</h1> <abbr title="required">*</abbr></label>
                                    <input wire:model="name" placeholder="Auction Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"  type="text" name="name" value="{{ $auction->name }}" id="name">
                                    
                                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                                
                            </div>
                            
                                
                                    <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                        <label class="font-semibold text-gray-600 py-2">Description</label> <abbr title="required">*</abbr>
                                        <textarea wire:model="description" required="" name="description" id="" class="w-full ckeditor form-control min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter auction dedscription" value="{!! $auction->description !!}" spellcheck="false">{!! $auction->description !!}</textarea>
                                        {{-- <p class="text-xs text-gray-400 text-left my-3">You inserted 0 characters</p> --}}
                                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <p class="text-xs text-red-500 text-right my-3">Required fields are marked with an
                                        asterisk <abbr title="Required field">*</abbr></p>
                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                        <button class="mb-2 md:mb-0 bg-red-500 px-5 py-2 text-sm text-white shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">Cancel </button>
                                        <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </x-app-layout>
            