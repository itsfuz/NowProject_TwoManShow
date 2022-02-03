<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
{{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('css/now.css') }}">
{{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" style="text-">
    <title>Now</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <button onclick="topFunction()" id="myBtn">
        <img src="https://img.icons8.com/material-sharp/24/000000/sort-up.png"/>
    </button>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light" style="padding-left: 100px; background-color:white">
            <a class="navbar-brand font-weight-bold" href="#" style=" font-family: 'Montserrat', sans-serif" id="brand">NOW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"  style="padding-left: 20%" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <div class="dropdown">
                            <li>
                                <a href="#categories" class="nav-link" id="dropbtn">Categories</a>
                            </li>
                            <div class="dropdown-content">
                              <a href="#">Shirts</a>
                              <a href="#">Pants</a>
                              <a href="#">Skirts</a>
                            </div>
                          </div>
                          <li class="nav-item active" style="padding-left: 50px">
                            <a class="nav-link" href="#allproducts">All Products</a>
                          </li>
                        <li class="nav-item active" style="padding-left: 50px">
                            <a class="nav-link" href="#contactus">Contact Us</a>
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
        {{-- <footer class="text-center text-lg-start" id="contactus">
            <!-- Copyright -->
            <div class="text-center p-3  mt-auto" style="background-color: #FA4EAB; color:white">
                  © 2022 Copyright:
                  <a class="text-dark">NOW</a>
            </div>
            <!-- Copyright -->
        </footer> --}}

        <footer class="bg-dark text-center text-white" id="contactus">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-github"></i
                ></a>
              </section>
              <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2020 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
          </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
           mybutton = document.getElementById("myBtn");
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }
    </script>


</body>
</html>
