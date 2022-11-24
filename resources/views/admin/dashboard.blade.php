@extends('admin.categories.adminlayout')
@section('title')
    Dashboard
@endsection
@section('content')
<style>
  		#color{
            height: 1000px;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBIYjB94fADK4HioOhgI0cb5I1C9nk0YNq2Q&usqp=CAU');
          }

</style>
    <div class="content-wrapper" id="color">
        <div class="container">
            <div class="row justify-content-around">
                <div class="info-box mt-5 col-3">
                    <span class="info-box-icon bg-info"><i class="fa-sharp fa-solid fa-chart-simple"></i></span>
                    <div class="info-box-content" value="">
                      <span class="info-box-text">Category</span>
                      <span class="info-box-number">{{ $categories->count() }}</span>
                       <a href="{{ route('category.index') }}"></a>
                    </div>
                  </div>
                  <div class="info-box mt-5 col-3">
                    <span class="info-box-icon bg-warning"><i class="fa-sharp fa-solid fa-store"></i></span>
                    <div class="info-box-content" >
                      <span class="info-box-text">Brand</span>
                      <span class="info-box-number">{{ $brands->count() }}</span>
                      <a href="{{ route('brand.index') }}"></a>
                    </div>
                  </div>
                  <div class="info-box mt-5 col-3">
                    <span class="info-box-icon bg-primary"><i class="fa-brands fa-shopify"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">product</span>
                      <span class="info-box-number">{{ $products->count() }}</span>
                      <a href="{{ route('product.index') }}"></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection