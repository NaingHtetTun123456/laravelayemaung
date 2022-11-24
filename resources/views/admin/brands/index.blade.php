@extends('admin.categories.adminlayout')
@section('title')
    Product index
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($brands as $brand)
                               <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->title }}</td>
                                <td>
                                   <form action="{{ route('brand.destroy', $brand->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('brand.edit',$brand->id) }}" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('brand.create') }}" class="btn btn-success">Create Brand</a>
                </div>
            </div>
        </div>
    
    </div>
@endsection