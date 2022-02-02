<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/now.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Now</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <header>

        <nav class="navbar navbar-expand-lg navbar-light" style="padding-left: 100px; background-color:white">
            <a class="navbar-brand" href="#">NOW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"  style="padding-left: 30%" id="navbarSupportedContent">


                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active" style="padding-left: 50px">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active" style="padding-left: 50px">
                            <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
                          </li>
                      </ul>

              <form class="form-inline my-2"  style="padding-right: 100px" >
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon" style="background-color: white">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>
              </form>
            </div>
          </nav>
    </header>

    <div style="display:flex; justify-content:center; margin-top:50px">
        <br>
        @yield('content')
        <br>
    </div>

    <div class=" mt-auto">
        <footer class="text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3  mt-auto" style="background-color: #FA4EAB; color:white">
                  © 2022 Copyright:
                  <a class="text-dark">NOW</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


</body>
</html>
