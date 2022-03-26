@extends('master')

@section("content")

<div class="col">
    {{-- slider --}}
    <div id="slideshow" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{URL::asset('images/1.png')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{URL::asset('images/2.png')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{URL::asset('images/3.png')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br><br>

{{-- ALL PRODUCTS --}}
<div id="allproducts" style="text-align: center">
    <h3 class="text-uppercase">All Products</h3>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($allCategories as $category)
                    @foreach ($allProducts as $product)
                            @if($product->category_id == $category->id)
                                    <div class="col-7 col-sm-3" id="products">
                                        {{$product->product_name}}<br>
                                        {{$product->product_unique_id}} <br> <br>
                                        <a href="/product_detail"><img src=" {{ Storage::url($product->image) }}" alt="" style="  height: 300px; width: 250px"></a>
                                        {{$category->category_id}}
                                    </div>
                            @endif
                    @endforeach
            @endforeach
        </div>
    </div>
</div>

<br><br>
{{-- CATEGORIES --}}
<div id="categories" style="text-align: center">
    <h3 class="text-uppercase">Categories</h3>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($allCategories as $category)
                <div class="col-6 col-sm-3">
                    {{$category->category_name}}
                </div>
            @endforeach
        </div>

    </div>

</div>



</div>

<script>
    function change() {
  const elements = document.querySelectorAll("div.box");
  for (let element of elements) {
    element.classList.toggle("transformed-state");
  }
}

const changeButton = document.querySelector("#change");
changeButton.addEventListener("click", change);
</script>




@endsection
