@extends('layouts.front')

@section('title')
    Welcome to E-shop
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach($featured_products as $prod)
                        <div class="col-md-3">
                            <a href="{{url('category/'.$prod->category->slug.'/'.$prod->slug)}}">
                                
                                <div class="card" style="width: 400px;">
                                    <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product Image" >
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start">&dollar;{{ $prod->selling_price }}</span>
                                        <span class="float-end"><s>&dollar;{{ $prod->original_price }}</s></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('category/'.$tcategory->slug) }}">
                                <div class="card" style="width: 400px;">
                                    <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Categort Image" >
                                    <div class="card-body">
                                        <h5>{{ $tcategory->name }}</h5>
                                        <p>
                                            {{ $tcategory->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    }) 
    </script>
@endsection