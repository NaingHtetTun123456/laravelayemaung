@extends('admin.categories.adminlayout')
@section('title')
    index form
@endsection
@section('content')
    
    <div class="content-wrapper">
        @if (session('create'))
    <div class="alert alert-info" role="alert">
        {{ session('create') }}
      </div>
    @endif
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
                           @foreach ($categories as $category)
                               <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>
                                   <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-warning">Edit</a>
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('category.create') }}" class="btn btn-success">Create</a>
                </div>
            </div>
        </div>
    
    </div>
@endsection