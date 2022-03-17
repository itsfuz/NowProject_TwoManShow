@extends('layouts.sidebar')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card" style="align-items:center">
            <br>
            <form action="/addFurniture" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>ADD CATEGORY</h3>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <label for="name">Category Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <label for="price">Category Detail</label>
                          <input type="text" name="category" class="form-control @error('price') is-invalid @enderror" id="category" placeholder="category" value="{{ old('category') }}">
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <br><br>
                <button class="w-100 btn btn-lg" type="submit" id="addBtn">Add Category</button>
              </form>
              <br>
        </div>
        <br>
    </div>


</body>
</html>


<style>
    /* body{
        background-image: linear-gradient(to bottom right,#FE83C6 50%,#A3E4DB 50%);
        width: 100%;
        height: fit-content;
   } */

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
    box-shadow: 5px 5px black;
   }

   h3 {
       color: black;
        text-align: center;
        border-bottom: 1px solid gray;
   }

   #addBtn {
    background: #A3E4DB;
    color:black;
   }

</style>
@endsection
