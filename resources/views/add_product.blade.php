<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/now.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" style="text-">
    <title>Add Product</title>
</head>
<body>

    <div class="container d-flex justify-content-center">
        <div class="card" style="align-items:center">
            <br>
            <form action="/addFurniture" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>ADD PRODUCT</h3>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <label for="price">Price</label>
                          <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="190000" value="{{ old('email') }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <label for="type">Type</label>
                            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Chair">
                              @error('type')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <br>
                          <div class="form-floating">
                            <label for="color">Color</label>
                              <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color" placeholder="Brown">
                              @error('color')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                    </div>
                </div>
                <br>
                <div>
                    <label class="form-label" for="image">Insert Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" style="height: fit-content">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br><br>
                <button class="w-100 btn btn-lg" type="submit" id="addBtn">Add Product</button>
              </form>
              <br>
        </div>
        <br>
    </div>


</body>
</html>


<style>
    body{
        background-image: linear-gradient(to bottom right,#FE83C6 50%,#A3E4DB 50%);
        width: 100%;
        height: fit-content;
   }

   .card {
    width: 700px;
    height: fit-content;
    display:flex;
    justify-content:center;
    margin:auto;
    align-items: center;
    border-radius: 50px;
    padding: 20px;
    margin: auto;
    box-shadow: 5px 5px #4f8f86;
   }

   h3 {
       color: black;
        text-align: center;
        border-bottom: 1px solid gray;
   }

   #addBtn {
    background: #4f8f86;
    color:white;
   }

</style>
