@extends('layouts.sidebar')

@section('content')
<div>
    <div class="row" style="display: flex; justify-content:center; text-align:center">
            <h1>View Products</h1>
    </div>
    <br><br>
    {{-- ALL PRODUCTS --}}
    <div id="allproducts" style="text-align: center">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($allCategories as $category)
                        @foreach ($allProducts as $product)
                                @if($product->category_id == $category->id)
                                        <div class="col" id="products">
                                            <div class="card"  style=" align-items:center; width:300px;">
                                                <br><br>
                                                <a href="/product_detail"><img src=" {{ Storage::url($product->image) }}" alt="" style="  height: 300px; width: 250px"></a>
                                                <br>
                                                <p>Product Name: {{$product->product_name}}</p>
                                                <p>Product ID: {{$product->product_unique_id}}</p>
                                                <p>Product Category: {{$category->category_name}}</p>
                                                <button type="button" class="btn" style="background-color: #FA4EAB; color: white">Update Product</button>
                                                <br>
                                            </div>

                                        </div>
                                @endif
                        @endforeach
                @endforeach
            </div>
        </div>
    </div>


    {{-- <div class="row" style="display: flex; justify-content:center">
        <div class="col">
            <div class="card">
                <a href="/product_detail"><img class="card-img-top"  src="images/pants.jpg" alt="Product Image" style="padding: 2px; width:200px;"></a>
                <br>

                <h5><a id="linkDetail" href="/product_detail">Product Name</a></h5>
                <br>
                <h6>Product ID:</h6>
                <h6>Rp. </h6>
                <h6>Color</h6>
                <br>
                <br>
            </div>
        </div>
        <div class="col">
            <div class="card" style=" align-items:center;width:300px; height:450px;">
                <a href="/product_detail"><img class="card-img-top"  src="images/pants.jpg" alt="Product Image" style="padding: 2px; width:200px;"></a>
                <br>

                <h5><a id="linkDetail" href="/product_detail">Product Name</a></h5>
                <br>
                <h6>Product ID:</h6>
                <h6>Rp. </h6>
                <h6>Color</h6>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style=" align-items:center;width:300px; height:450px;">
            <a href="/product_detail"><img class="card-img-top"  src="images/pants.jpg" alt="Product Image" style="padding: 2px; width:200px;"></a>
            <br>

            <h5><a id="linkDetail" href="/product_detail">Product Name</a></h5>
            <br>
            <h6>Product ID:</h6>
            <h6>Rp. </h6>
            <h6>Color</h6>
            <br>
            <br>
        </div>
    </div> --}}

</div>

@endsection
