@extends('layouts.sidebar')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card" style="align-items:center">
            <br>

            <form  action="/AddProduct/" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>ADD PRODUCT</h3>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="name" placeholder="product_name" value="{{ old('name') }}">
                            @error('product_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="product_unique_id">Product ID</label>
                            <input type="text" name="product_unique_id" class="form-control @error('product_unique_id') is-invalid @enderror" id="product_unique_id" placeholder="product_unique_id" value="{{ old('product_unique_id') }}">
                            @error('product_unique_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                    </div>
                    <div class="col-lg justify-content-center">
                        <div class="form-group">
                            @foreach ($categories as $category)
                            <label for="category_id">Category :{{$category->category_name}}</label>
                            <select id="category_id" name="category_id" class="form-control" placeholder="Category">
                                    <option>{{$category->id}}</option>
                                    @endforeach
                            </select>

                                @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                          <br>
                          <div class="form-group">
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
                <div class="row">
                    <div class="form-group">
                        <label for="description">Description</label>
                      <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="description">
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
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
                {{-- details --}}
                <br>
                <div class="row">
                    <div class="col">
                        <div>
                            <label class="form-label" for="detail_1">Insert Detail Image 1</label>
                            <input type="file" name="detail_1" class="form-control @error('detail_1') is-invalid @enderror" id="detail_1" style="height: fit-content">
                            @error('detail_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="form-label" for="detail_2">Insert Detail Image 2</label>
                            <input type="file" name="detail_2" class="form-control @error('detail_2') is-invalid @enderror" id="detail_2" style="height: fit-content">
                            @error('detail_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label class="form-label" for="detail_3">Insert Detail Image 3</label>
                            <input type="file" name="detail_3" class="form-control @error('detail_3') is-invalid @enderror" id="detail_3" style="height: fit-content">
                            @error('detail_3')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div>
                            <label class="form-label" for="detail_4">Insert Detail Image 4</label>
                            <input type="file" name="detail_4" class="form-control @error('detail_4') is-invalid @enderror" id="detail_4" style="height: fit-content">
                            @error('detail_4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row justify-content-center">
                    <div class="col-md-auto">
                        <button class="w-100 btn btn-lg" type="submit" id="addBtn">Add Product</button>
                    </div>
                </div>
              </form>
              <br>
        </div>
        <br>
    </div>


</body>
</html>


<style>
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
