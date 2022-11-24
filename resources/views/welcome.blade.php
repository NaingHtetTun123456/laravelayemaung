<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/145089892c.js" crossorigin="anonymous"></script>
    <style>
         #image{
            position: relative;
            background-image: url(https://i.pinimg.com/originals/be/69/18/be6918c5d9b9d3807c87f330656b8a41.jpg);
            background-size: cover;
            width: 100%;
            height: 800px;
            opacity: 0.2;
            opacity: 1;
        } 

        #text {
            position: relative;
            opacity: 0.2;
            opacity: 1;
            animation-name: kyaw;
            animation-duration: 1s;
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            margin-top: 300px;
            margin-left: 30px;
        }
        @keyframes kyaw{
              from{left: -1024px}
               to{left: 0px}
        }
        .p3 {
            font-family: "Lucida Console", "Courier New", monospace;
            }
        #card{
            position: relative;
            width: 450px;
            margin-left: 30px;
            -webkit-animation : card 2s normal 0s 1 , shadow 2s normal 0s infinite;
        }
        @-webkit-keyframes card{
            from {right: -1024px;}
            to {right: 0px;}
        } 
        @-webkit-keyframes shadow {
            from {box-shadow: 10px 20px 20px blue;}
            to {box-shadow: 10px 20px 30px green;}
        }
    </style>
</head>
<body class="bg-dark">
    <div id="image">
        <div class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><h2 class="text-warning bg-transparent">LOGO</h2></a>
                    <div class="row justify-content-end">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item justify-content-end">
                                    <a class="nav-link active" aria-current="page" href="{{route('category')}}"><h6 class="text-info bg-dark"><button class="btn btn-outline-warning">CATEGORY</button></h6></a>
                                    </li>
                                <li class="nav-item">
                                <a class="nav-link" href="/welcome"><h6 class="text-info bg-dark"><button class="btn btn-outline-warning">HOME</button></h6></a>
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('brand')}}"><h6 class="text-info bg-dark"><button class="btn btn-outline-warning">BRAND</button></h6></a>
                                </li>
                            </ul>
                    </div>
                </div>
                </div>
            </nav>
        </div>
            <div id="text">
                <h1>WELCOME TO MYANMAR</h1>
                <div>
                    <p class="p3">      PROFESSIONAL   WEB   DESIGNER   &   WEB    DEVELOPER</p>
                </div>
            </div>
            <div class="col-sm-6" id="card">
            <div class="card bg-transparent">
                <div class="card-body">
                    <h5 class="card-title text-danger">Special title treatment</h5>
                    <p class="card-text text-info">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('customer-login')}}" class="btn btn-outline-warning">LOGIN</a>
                    <a href="{{route('register-view')}}" class="btn btn-outline-warning">REGISTER</a>

                </div>
                </div>
            </div>

            

</div>
</body>
</html>
