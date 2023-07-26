@extends('layout.front')

@section('content')
    <!-- Categories Section -->
    <section class="section category">
      <div class="cat-center">
        @forelse ($categories as $category)
          
        <div class="cat">
          <img src="{{ asset('images/cat3.jpg') }}" alt="" />
          <div>
            <p>{{ $category->name }}</p>
          </div>
        </div>
        
        @empty
        <div class="cat">
          {{-- <img src="{{ asset('images/cat3.jpg') }}" alt="" /> --}}
          <div>
            <p>Empty</p>
          </div>
        </div>
        @endforelse
      </div>
    </section>

    <!-- New Arrivals -->
    <section class="section new-arrival">
      <div class="title">
        <h1>NEW ARRIVALS</h1>
        <p>All the latest picked from designer of our store</p>
      </div>

      <div class="product-center">

        @forelse ($products as $product)
          
        <div class="product-item">
          <div class="overlay">
            <a href="{{ route('product.show', $product->id) }}" class="product-thumb">
              <img src="{{ Storage::url($product->image) }}" alt="" />
            </a>
          </div>
          <div class="product-info">
            <span>{{ $product->category->name }}</span>
            <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
            <h4>${{ $product->price }}</h4>
          </div>
          <ul class="icons">
            </a>
              <li><a href="{{ route('product.show', $product->id) }}"><i class="bx bx-heart"></i></a></li>
              <li><i class="bx bx-search"></i></li>
              <li><i class="bx bx-cart"></i></li>
          </ul>
        </div>
       
        @empty
          Empty ...
        @endforelse
      </div>
    </section>

@endsection