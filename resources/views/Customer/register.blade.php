@extends('layouts.customerAuth')

@section('content')

@stop

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/145089892c.js" crossorigin="anonymous"></script>

</head>
<style>
    
		body{
            height: 1000px;
            background: linear-gradient(to top left, blue, pink);
        }

</style>
<body>
    @if ($errors->any())
             <div class="alert alert-primary">
                 <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                  </ul>
             </div>
        @endif

    <div class="constainer">
        <div class="row justify-content-center">
            <div class="card col-5 mt-5">
                <div class="card-header">
                    <p>Register</p>
                </div>
                <div class="card-body">
                <form action="{{route('register-submit')}}" method="POST">
                    @csrf
					<div class="input-group form-group mt-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="name" placeholder="username (or) Email">
						
					</div>
					<div class="input-group form-group mt-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope "></i></span>
						</div>
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
                    <div class="input-group form-group mt-3 ">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
                    <div class="input-group form-group mt-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key me-1"></i></span>
						</div>
						<input type="password" class="form-control" name="password_confirmation" placeholder="Repeat your password">
					</div>
					<div class="form-group mt-3">
                        <a href="" class="mt-3 text-decoration-none">Already have an account?</a>
                        <button class="btn btn-outline-warning">Register</button>
					</div>
				</form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>