@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @session('success')
            <div class="alert alert-primary" role="alert">
                {{ $value }}
            </div>
        @endsession
        <div class="col-md-9">
            @if (auth()->user()->isAdmin())
                <div class="row d-flex justify-content-end">
                    <div class="col-sm-2 text-end">
                        <a href="{{ route('products.create') }}" class="btn btn-primary">+ Producto</a>
                    </div>
                </div>
            @endif
            <div class="row">
                @each('products._product', $products, 'product')
            </div>
        </div>
    </div>
</div>
@endsection
