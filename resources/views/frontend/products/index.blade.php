@extends('layouts.front')

@section('title')
    Products
@endsection

@section('content')
<div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{ $category->name }}</h2>
                    @foreach($products as $prod)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">
                                    <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product Image" width="100%">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start">&dollar;{{ $prod->selling_price }}</span>
                                        <span class="float-end"><s>&dollar;{{ $prod->original_price }}</s></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection