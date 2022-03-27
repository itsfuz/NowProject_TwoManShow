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

    <link href="{{ URL::asset('css/sidebar.css') }}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@800&display=swap" rel="stylesheet">
     <!-- Font Awesome JS -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Fredoka&family=Montserrat:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>Now</title>
</head>


<body>
    <button onclick="topFunction()" id="myBtn">
        <img src="https://img.icons8.com/material-sharp/24/000000/sort-up.png"/>
    </button>

<div>
    <div class="wrapper">
        <nav id="sidebar">

             <div class="sidebar-header">
                <a class="navbar-brand font-weight-bold" href="/" id="brand">NOW</a>
             </div>
             <ul class="lisst-unstyled components">
                <li>
                    <a href="/dashboard">View Products</a>
                </li>
                <li>
                    <a href="/add_product">Add Product</a>
                </li>
                <li>
                    <a href="/add_category">Add Category</a>
                </li>
             </ul>

             <div class="design">

             </div>
        </nav>

       <div id="content" style="display:flex; flex-direction:column;">
            <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 1px solid rgb(204, 204, 204)">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" id="sidebarCollapse" class="btn" style="background-color: #A3E4DB">
                            <i class="fas fa-align-left"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="dropdown">
                            <h4>
                                Welcome,
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h4>Admin</h4>
                                </button>
                            </h4>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
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
