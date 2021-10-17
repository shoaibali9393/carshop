@extends('layouts.admin')
@section('content')


    <h1 class="pl-2">Create Product</h1>
    <div class="card-body"><h5 class="card-title"></h5>
        <form enctype="multipart/form-data" action="{{route('admin.product.store') }}" method="post">
            @method('post')
            @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="name" class="">Name</label><input name="name"  id="name" placeholder="Name" type="text" class="form-control" required></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="color" class="">Color</label><input name="color" id="color" type="text" placeholder="Color" class="form-control" required></div>
                </div>
            </div>



            <div class="form-row">

                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="price" class="">Price</label><input name="price" id="price" type="number" placeholder="Price" class="form-control" required></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Category</label>
                        <select class="form-control" name="category_id" required>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                 <div class="col-md-6">
                    <div class="position-relative form-group"><label for="image" class="">Featured Image</label><input name="featured_image" id="imgae" type="file" placeholder="Featured Image" class="form-control" accept="image/*" required></div>
                </div>
            </div>




            <button class="mt-2 btn btn-primary">Submit</button>
        </form>
    </div>


@stop





