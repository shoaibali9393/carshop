@extends('layouts.admin')
@section('content')


    <h1 class="pl-2">Edit Category</h1>
    <div class="card-body"><h5 class="card-title"></h5>
        <form enctype="multipart/form-data" action="{{route('admin.category.update', $category->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Title</label><input name="name" value="{{$category->name}}" id="name" placeholder="Name" type="text" class="form-control"></div>
                </div>
            </div>



            <button class="mt-2 btn btn-primary">Submit</button>
        </form>
    </div>


@stop





