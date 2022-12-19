<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .selections{
            display: block;
            background-color: black !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin-top:100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Project Details
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.details', ['project_slug'=> $project->slug]) }}" class="btn btb-success pull-right"> All Details</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="addProjectDetail">
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-4 control-lable">Detail Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Detail Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-4 control-lable">Detail Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Detail Slug" class="form-control input-md" wire:model="slug">
                                    @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="p-2 form-group border">
                                <label for="" class="col-md-4 control-lable">Detail Image</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model="image">

                                    @error('image')
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
                                <label for="" class="col-md-4 control-lable"></label>
                                <div class="col-md-4">
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

