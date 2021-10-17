@extends('layouts.admin')
@section('content')


    <h1 class="pl-2">Edit Product</h1>
    <div class="card-body"><h5 class="card-title"></h5>
        <form   enctype="multipart/form-data" action="{{route('admin.product.update', $product->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="name" class="">Name</label><input name="name" value="{{$product->name}}" id="name" placeholder="Name" type="text" class="form-control"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="color" class="">Color</label><input name="color" id="color" type="text" value="{{$product->color}}" placeholder="color" class="form-control"></div>
                </div>
            </div>



            <div class="form-row">

                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="Price" class="">Price</label><input name="price" id="price" type="number" value="{{$product->price}}" placeholder="Price" class="form-control"></div>
                </div>
            </div>


            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Category</label>
                        <select class="form-control" required name="category_id">
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Featured Image</label><input  name="featured_image" id="featured_image" type="file" value="{{$product->featured_image}}" placeholder="Featured Image" class="form-control"></div>
                </div>
            </div>



            <button class="mt-2 btn btn-primary">Submit</button>
        </form>
    </div>


@stop





