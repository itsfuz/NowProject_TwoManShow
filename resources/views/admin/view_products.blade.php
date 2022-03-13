@extends('layouts.sidebar')

@section('content')
<div>
    <div class="row" style="display: flex; justify-content:center; text-align:center">
            <h1>View Products</h1>
    </div>
    <br>
    {{-- @if($product->category_id == $category->id)
    <div class="col-7 col-sm-3" id="products">
        {{$product->product_name}}<br>
        {{$product->product_unique_id}} <br> <br>
        <a href="/product_detail"><img src=" {{ Storage::url($product->image) }}" alt="" style="  height: 300px; width: 250px"></a>
        {{$category->category_id}}
    </div>
    @endif --}}
    <div class="row" style="display: flex; justify-content:center">
        <div class="col">
            <div class="card" style=" align-items:center; width:300px; height:450px;">
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
    </div>
</div>
</div>

@endsection
