
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/now.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" style="text-">
    <title>Product Detail</title>

</head>
<body>
    <br>
    <div class="container d-flex justify-content-center" style="align-items:center">
        <br>
        <div class="row">
            <div class="col" style="">
                <div class="col">
                    <img src="{{Storage::url("../images/40f.png")}}" alt="" style="width:50px; margin:10px">
                </div>
                <div class="col">
                    <img src="{{Storage::url("../images/40f.png")}}" alt=""  style="width:50px; margin:10px">
                </div>
                <div class="col">
                    <img src="{{Storage::url("../images/40f.png")}}" alt="" style="width:50px; margin:10px">
                </div>
                <div class="col">
                    <img src="{{Storage::url("../images/40f.png")}}" alt="" style="width:50px; margin:10px">
                </div>
            </div>
            <div class="col">
                <img src="{{Storage::url("../images/40f.png")}}" alt="" style="width:500px;margin:10px">
            </div>
            <div class="col" style="align-items:center">
                <p>Id</p>
                <p>Name</p>
                <p>Type</p>
                <p>Color</p>
                <p>Size</p>
            </div>
            <div class="w-100"></div>


        </div>
        <br>
    </div>

</body>

<style>

    body{
        height: fit-content;
        background: none;
        margin:auto
   }

</style>
</html>


