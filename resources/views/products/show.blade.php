<!--@extends('layouts.apps')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" value="1" min="1" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
@endsection-->



<!-- <div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>

    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add to Cart</button>
    </form>
</div> -->


    <div class="container">
        <h1 class="text-center">Product Page</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row">
            <div class="card-deck">
                @if(count($products) > 0)
                    @foreach($products as $product)
                        <div class="card">
                            <img
                                src="{{$product->image}}"
                                alt="{{$product->name}}"
                                class="card-img-top"
                                height="400"
                            >
                            <div class="card-header">
                                {{$product->name}}
                                <span class="float-right">{{$product->amount_with_currency}}</span>
                            </div>
                            <div class="card-body">
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div class="card-footer">
                                <a
                                    href="{{route('add-cart', [$product->id])}}"
                                    class="btn btn-success btn-block"
                                >Add To Cart</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
