<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" style="text-">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container justify-content-center">
        <br><br><br>
        <h1 style="color: #FA4EAB; text-align: left">Welcome, Admin</h1>
        <div class="row delay-2">
            <div class="col-md">
                <a href="/add_product"><h5>Add Product</h5></a>
            </div>
            <div class="col-md">
                <a href="/add_category"><h5>Add Category</h5></a>
            </div>
        </div>
        <div class="row delay-2">
            <div class="col-md">
                <a href="/view_products"><h5>View Products</h5></a>
            </div>
            <div class="col-md">
                <h5>something</h5>
            </div>
        </div>

    </div>


</body>
</html>


<style>
    body{
        background-color: white;
        height: fit-content;
        text-align:center;
        font-family: 'Fredoka', sans-serif;
   }

   a{
       color: white;
       text-decoration: none;
   }

   a:hover{
       color: #A3E4DB;
       text-decoration: none;
   }

   .col-md {
    padding: 50px;
    margin: 30px;
    background-color: #FA4EAB;
    color: white;
    border-radius: 30px;
    box-shadow: 5px 5px 5px white;
    }

    .col-md:hover {
    background-color: #048A81;
    color: #A3E4DB;
    border:solid #A3E4DB 1pt;
    transition: 0.3s;
    transform: scale(1.1);
    border-radius: 50px;
    }
</style>
