@extends('layouts.app')

@section('content')
    <div class="text-center index-title">
        <h1>商品一覧</h1>
    </div>
    @if (count($products) > 0)
        <div class="row">
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card">
                    <img src="/storage/image/{{ $product->img }}" alt="{{ $product->img }}" class="card-top">
                    <div class="card-body">
                        <a href="#" class="card-link">{{ $product->name }}</a>
                        <p class="card-text">{{ $product->price }}円</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endif
    <div>
        {{ $products->links() }}
    </div>
@endsection