<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ URL::asset('css/furnishsetable.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@800&display=swap" rel="stylesheet">
     <!-- Font Awesome JS -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>Furnishsetable</title>
</head>


<body>
    <button onclick="topFunction()" id="myBtn">
        <img src="https://img.icons8.com/material-sharp/24/000000/sort-up.png"/>
    </button>

<div>
    <div class="wrapper">
        <nav id="sidebar">

             <div class="sidebar-header">
                 <img src="{{asset('images/FURNISHSETABLE.png')}}" alt="Furnishsetable" style="width:200px; padding: 10px;">
             </div>
             @auth
                @if (auth()->user()->id)
                <div style="padding: 20px; background-color:#ECAC5D; text-align:center; color:black;">
                   <b> Welcome, {{auth()->User()->username}}</b>
                </div>
                @endif
             @endauth

             <div>

             </div>
             <ul class="lisst-unstyled components">
                <li>
                    <a href="/home">Home</a>
                </li>

                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Products</a>
                  <ul class="collapse list-unstyled" id="homeSubmenu">
                      <li>
                          <a href="/products">All Products</a>
                      </li>
                      <li>
                          <a href="/LivingRoomProducts/1">Living Room</a>
                      </li>
                      <li>
                        <a href="/BedroomProducts/2">Bedroom</a>
                      </li>
                      <li>
                        <a href="/KitchenProducts/3">Kitchen</a>
                      </li>
                      <li>
                        <a href="/BathroomProducts/4">Bathroom</a>
                      </li>
                      <li>
                        <a href="/OthersProducts/5">Others</a>
                      </li>

                  </ul>
                </li>

                @auth

                @if(auth()->user()->id)
                    <li>
                        <a href="/cart/{{auth()->user()->id}}">Cart</a>
                    </li>

                    <li>
                        <a href="/history">Transactions</a>
                    </li>

                @endif

                @endauth

                <li><a href="/contact">Contact Us</a></li>

             </ul>
        </nav>

       <div id="content" style="display:flex; flex-direction:column">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" id="sidebarCollapse" class="btn  btn-warning">
                            <i class="fas fa-align-left"></i>
                        </button>

                    </div>
                </div>
                <div>
                    <form action="/searchbyID" method="POST">
                        @csrf
                        <div class="input-group rounded">
                            <input type="search" name='search' class="form-control rounded" placeholder="Search by ID" aria-label="Search" aria-describedby="search-addon" />
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-search"></i>
                              </button>
                        </div>
                    </form>
                </div>

                @auth
                    @if(auth()->user()->id)
                    <div class="col">
                        <a href="/logout">Logout</a>
                    </div>

                    @endif
                    @else
                    <div class="col">
                        <a href="/login">Login</a>
                    </div>
                    <div class="/register">
                        <a href="/register">Register</a>
                    </div>
                @endauth


            </nav>
            <div style="display:flex; justify-content:center; margin-top:50px">
                <br>
                @yield('content')
                <br>
            </div>
        </div>

</div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });

        // scroll up button

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
