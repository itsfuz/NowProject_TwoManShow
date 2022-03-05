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
{{-- all products --}}
<div id="allproducts" style="text-align: center">
    <h3 class="text-uppercase">All Products</h3>
    <div class="container">

        <div class="row delay-2">
            <div class="col-lg">
            Kulot
            </div>
            <div class="col-lg">
            Tunik
            </div>
            <div class="col-lg">
            Gamis
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
            Atasan XL
            </div>
            <div class="col-lg">
            Jumbo
            </div>
            <div class="col-lg">
            Rok
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
            Joger
            </div>
            <div class="col-lg">
            Overalls
            </div>
            <div class="col-lg">
            One Set
            </div>
        </div>
    </div>

</div>

<br><br>
{{-- Categories --}}
<div id="categories" style="text-align: center">
    <h3 class="text-uppercase">Categories</h3>
    <div class="container">
        <div class="row delay-2">
            @foreach ($allCategories as $category)



                @foreach ($allProducts as $product)

                    @if($product->category_id == $category->id)

                        <div class="col-sm">
                            Kulot
                        </div>

                    @endif


                @endforeach
            @endforeach
            <div class="col-sm">
            Tunik
            </div>
            <div class="col-sm">
            Gamis
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            Atasan XL
            </div>
            <div class="col-sm">
            Jumbo
            </div>
            <div class="col-sm">
            Rok
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            Joger
            </div>
            <div class="col-sm">
            Overalls
            </div>
            <div class="col-sm">
            One Set
            </div>
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
