@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Product Detail</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product Detail</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-5 ftco-animate">
                  <a href="{{asset('assets/images/menu-2.jpg')}}" class="image-popup"><img src="{{asset('assets/images/menu-2.jpg')}}" class="img-fluid" alt="Colorlib Template"></a>
              </div>
              <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                  <h3 class="text-white"> {{$products->name}}</h3>
                  <p class="price"><span>{{$products->price}}</span></p>
                  <p>{{$products->description}}</p>
                      <div class="row mt-4">
                          <div class="col-md-6">
                              <div class="form-group d-flex">
                   
                  </div>
                          </div>
                      
            </div>
            <p><a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
          <h2 class="mb-4">Related products</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        @foreach ($related_products as $related_product )
        <div class="col-md-3">
            <div class="menu-entry">
                    <a href="{{route('product.single',$related_product->id)}}" class="img" style="background-image: url({{asset('assets/images/'.$related_product->image.'')}});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="{{route('product.single',$related_product->id)}}">{{$related_product->name}}</a></h3>
                        <p>{{$related_product->description}}</p>
                        <p class="price"><span>${{$related_product->price}}</span></p>
                        <p><a href="{{route('product.single',$related_product->id)}}" class="btn btn-primary btn-outline-primary">show</a></p>
                    </div>
                </div>
        </div>
        @endforeach
         
          
      </div>
      </div>
  </section>


@endsection