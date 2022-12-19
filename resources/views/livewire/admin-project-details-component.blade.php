<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin-top:100px;">
        <div class="">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Project Details</div>
                            <div class="col-md-6"><a href="{{ route('admin.adddetails', ['project_slug'=> $project->slug]) }}" class="btn btn-success pull-right"> Add New Detail</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Project Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                            @endphp
                                @foreach ($details as $detail)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $detail->name }}</td>
                                        <td><img src="{{ asset('images/projects') }}/{{ $detail->image }}" alt="{{ $detail->name }}" width="60"></td>
                                        <td>{{ $detail->project->name }}</td>
                                        <td>{{ date('d F, Y', strtotime($detail->created_at)) }}</td>
                                        <td>
                                            {{-- <a href="{{ route('admin.editproperty', ['property_slug'=> $property->slug]) }}" ><i class="fa fa-edit fa-1x"></i></a> --}}
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteAmenity({{ $detail->id }})" style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
