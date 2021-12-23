
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
                                                    <input type="number" name="lot_ref" class="form-control"  > <div class="help-block"></div>
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
                                                <h5>Year of Lotion <span class="text-danger">*</span></h5>
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
                                    <h5 class="text-warning mt-4">Lot Image Upload Area</h5>
                                    <hr>
                                    {{-- Seventh row start --}}
                                    <h5 class="text-warning mt-4">Product Image Upload Area</h5>
                                    <hr>
                                    {{-- Seventh row start --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Product Thumbnail <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="lot_thumbnail" class="form-control" required="" data-validation-required-message="This field is required"
                                                    onChange="mainThumbnailShow(this)"> <div class="help-block"></div>
                                                </div>
                                                @error('lot_thumbnail')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                                <img src="" id="mainThumbnail" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Product Multiple Image <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="file" name="lot_images[]" class="form-control"  multiple="" id="multiImg" > <div class="help-block"></div>
                                                </div>
                                                @error('lot_images')
                                                    <span class="alert text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="row" id="preview_img"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
                                                <label class="form-check-label" for="status">Publish</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                id="status" name="status"  value="0">
                                                <label class="form-check-label" for="status">Reserve</label>
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


        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script>
            $(function() {
                $('.toggle-class').change(function() {
                    var status = $(this).prop('checked') == true ? 1 : 0;
                    var lot_items_id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '/admin/changestatus',
                        data: {'status': status, 'lot_id': lot_id},
                        success: function(data){
                            console.log(data.success)
                        }
                    });
                })
            })
        </script>


<script type="text/javascript">
    $(document).ready(function() {


      $(document).ready(function(){
    $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
    });
  });
</script>

<script type="text/javascript">
    function mainThumbnailShow(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


                </x-app-layout>
            