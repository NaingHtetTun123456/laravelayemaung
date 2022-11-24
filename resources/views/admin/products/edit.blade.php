@extends('admin.categories.adminlayout')
@section('title')
    Product Edit
@endsection
@section('content')

    <div class="content-wrapper">
        @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                  </ul>
             </div>
        @endif
        <div class="container">
            <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="d-flex justify-content-around row">
                    <div class="form-group col-5">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $product->title }}">
                    </div>
                    <div class="form-group col-5">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                    </div>
                    <div class="form-group col-5">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option disabled selected value="{{ $product->category_id }}">{{ $product->category->title }}</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-5">
                        <label for="brand_id">Brand</label>
                        <select name="brand_id" id="" class="form-control">
                            <option disabled selected value="{{ $product->brand_id }}">{{ $product->brand->title }}</option>
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-5">
                        <label for="description">Description</label>
                    <textarea name="description" id="" cols="30" rows="3" class="form-control">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group col-5">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" onchange="loadFile(event)">
                        <img src="{{ asset('storage\products') }}/{{ $product->image }}"  id="output" alt="product image" class="mt-1" width="130px" height="130px">
                    </div>
                </div>
                <button class="btn btn-warning">Edit Now</button>
            </form>
        </div>
    </div>
    <script>
        var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
        };
    </script>
@endsection