<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Project
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.projects') }}" style="color: whitesmoke"  class="btn btb-success pull-right"> All Projects</a>
                                <a href="{{ route('admin.amenities', ['project_slug'=> $project->slug]) }}" class="btn btb-success pull-right" > Project Amenities</a>
                                <a href="{{ route('admin.details', ['project_slug'=> $project->slug]) }}" class="btn btb-success pull-right" > Project Details</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProject">
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Project Name</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Project Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Project Slug</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Project Slug" class="form-control input-md" wire:model="slug">

                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Price</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Price" class="form-control input-md" wire:model="price">
                                    @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Duration in Production</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Duration i.e 1" class="form-control input-md" wire:model="duration">
                                    @error('duration')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Category</label>
                                <div class="col-md-8">
                                    <select name="" id="" class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Property Image</label>
                                <div class="col-md-8">
                                    <input type="file"  class="input-file" wire:model="newImage">
                                    @if($image)
                                        <img src="{{ asset('images/projects') }}/{{ $image }}" width="120" alt="">
                                    @endif
                                    {{-- @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}
                                </div>
                            </div>

                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-lable">Featured</label>
                                <div class="col-md-8">
                                    <select name="" id="" class="form-control" wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-label"><h4>Property Background Image</h4></label>
                                <div class="col-md-8" >
                                    <input type="file"  class="input-file" wire:model="bgImage">
                                    @if($bgImage)
                                    <img src="{{ asset('images/projectBG') }}/{{ $bgImage }}" width="120" alt="">
                                @endif
                                    @error('bgImage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-label"><h4>Short Description</h4></label>
                                <div class="col-md-8" wire:ignore>
                                    <textarea name="" id="s_description" placeholder="Short Description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-8 control-label"><h4>Description</h4></label>
                                <div class="col-md-8" wire:ignore>
                                    <textarea name="" id="description"  placeholder="Description" wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-lable"></label>
                                <div class="col-md-8">
                                    <Button type="submit" class="btn btn-primary">Submit</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            tinymce.init({
                selector:'#s_description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var s_data = $('#s_description').val();
                        @this.set('s_description',s_data );
                    });
                }
            });
            tinymce.init({
                selector:'#description',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var data = $('#description').val();
                        @this.set('description',data );
                    });
                }
            });
        });
    </script>
@endpush
