@extends('layouts.front')

@section('title', $products->name)

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('category') }}">
                Collections
            </a> / 
            <a href="{{ url('category/'.$products->category->slug) }}">
                {{ $products->category->name }}
            </a> / 
            <a href="{{ url('category/'.$products->category->slug.'/'.$products->slug) }}">
                {{ $products->name }}
            </a> / 
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-light">
                    <img src="{{ asset('assets/uploads/product/'.$products->image) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $products->name }}
                        @if($products->trending == '1')
                            <label class="float-end badge bg-danger trending_tag" style="font-size: 16px">Trending</label>
                        @endif
                    </h2>
                    <hr>
                    <label class="me-3">Original Price: <s>{{ $products->original_price }}</s></label>
                    <label class="fw-bold">Selling Price: <s>{{ $products->selling_price }}</s></label>
                    <p class="mt-3">
                        {!! $products->small_description !!}
                    </p>
                    <hr>
                    @if($products->qty > 0)
                        <label for="" class="badge bg-success">In stock</label>
                    @else
                        <label for="" class="badge bg-danger">Out of stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <input type="hidden" value="{{ $products->id }}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <div class="input-group-text decrement-btn">-</div>
                                <input type="text" name="quantity" value="1" class="form-control qty-input">
                                <div class="input-group-text increment-btn">+</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br>
                            @if($products->qty > 0)
                                <button type="button" class="btn btn-primary me-3 float-start addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            @endif
                                <button type="button" class="btn btn-success me-3  float-start"><i class="fa fa-heart"></i> Add to Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-top">
            <div class="row">
                <h3>Description</h3>
                <p>
                    {{ $products -> description }}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

