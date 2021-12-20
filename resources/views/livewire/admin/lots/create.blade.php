
<x-app-layout>
    <div class="bg-white shadow rounded-sm">
        <h1 class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 mb-8 text-xl">
             {{'Create Lot'}}
    </div>
    <div class="grid  gap-8 grid-cols-1">
        <div class="flex flex-col ">
   
                <div class="row">
                    {{-- Add Category Page --}}
                    <div class="col-12">
                        <div class="box">
                           
                            <!-- /.box-header -->
                            
                                <form action="{{ route('lots.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{-- First row start--}}
                                    <h5 class=" text-lg text-gray-700  ">Category Selection</h5>
                                    <hr>
                                    <div class="row text-lg">
                                  
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Category Name <span class="text-danger">*</span></h5>
                                                <select class="custom-select" aria-label="Default select example" name="category_id">
                                                    <option selected>Select Category Name</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                      
                                    </div>
                                    {{-- First row end --}}
                                    <h5 class=" text-lg text-gray-700   mt-4">LotInformation Area</h5>
                                    <hr>
                                    {{-- Second row start --}}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="title" class="form-control"  > <div class="help-block"></div>
                                                </div>
                                                @error('title')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Lot Reference <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="lot_ref" class="form-control"  > <div class="help-block"></div>
                                                </div>
                                                @error('lot_ref')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Artist<span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="text" name="artist" class="form-control"> <div class="help-block"></div>
                                                </div>
                                                @error('artist')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Year of Production <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="year" class="form-control"  > <div class="help-block"></div>
                                                </div>
                                                @error('year')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Start Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="start_date" class="form-control"  > <div class="help-block"></div>
                                                </div>
                                                @error('start_date')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>End Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="end_date" class="form-control"  > <div class="help-block"></div>
                                                </div>
                                                @error('end_date')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Second row end --}}
                                
                                    <hr>
                              
                                    
                                    <h5 class=" text-lg text-gray-700   mt-4">Lot Pricing Information Area</h5>
                                    <hr>
                                    {{-- Fourth row start --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Estimated Price <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="number" name="estimated" class="form-control"> <div class="help-block"></div>
                                                </div>
                                                @error('estimated')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Minimum Price <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="number" name="minimum" class="form-control"> <div class="help-block"></div>
                                                </div>
                                                @error('minimum')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                       
                                    </div>
                                    {{-- Fourth row end --}}
                                    <h5 class=" text-lg text-gray-700   mt-4">Lot Description Area</h5>
                                    <hr>
                                    {{-- Fifth row start --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Description <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <textarea wire:model="desc" required="" name="desc" id="" class="w-full ckeditor form-control min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter description" spellcheck="false"></textarea>
                                                  
                                                    <div class="help-block"></div>
                                                </div>
                                                @error('desc')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Additional Information <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <textarea wire:model="additional" required="" name="additional" id="" class="w-full ckeditor form-control min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter description" spellcheck="false"></textarea>
                                                  
                                                    <div class="help-block"></div>
                                                </div>
                                                @error('additional')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Fifth row end --}}
                                    
                                   
                                    <hr>
                                    
                                    {{-- Eighth row start --}}
                                    <h5 class=" text-lg text-gray-700   mt-4">Check</h5>
                                    <hr>
                                    <div class="row mb-3">
                                       
                                        <div class="col-md-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                id="status" name="status" checked value="1">
                                                <label class="form-check-label" for="status">Display</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                        <button class="mb-2 md:mb-0 bg-red-500 px-5 py-2 text-sm text-white shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">Cancel </button>
                                        <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500" type="submit">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->















                
        </div>
                </x-app-layout>
            