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
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(to top left, pink, blue);
        }

</style>
<body>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}"><h6 class="text-info bg-dark">login</h6></a>
                                </li>
                            </ul>
                        <div>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
        </div>

</body>
</html>