@extends('layouts.admin')
@section('content')


    <h1 class="pl-2">Create Category</h1>
    <div class="card-body"><h5 class="card-title"></h5>
        <form enctype="multipart/form-data" action="{{route('admin.category.store') }}" method="post">
            @method('post')
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Name</label><input name="name"  id="name" placeholder="Name" type="text" class="form-control" required></div>
                </div>
            </div>



            <button class="mt-2 btn btn-primary">Submit</button>
        </form>
    </div>


@stop





