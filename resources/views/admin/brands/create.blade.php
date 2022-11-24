@extends('admin.categories.adminlayout')
@section('title')
    Create Product
@endsection
@section('content')

    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{ route('brand.store') }}" method="POST">
                        @csrf
                       <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                       <button class="btn btn-success">Create Brand</button>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
@endsection