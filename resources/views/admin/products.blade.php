@extends('layouts.app')

@section('content')

    @foreach( $products as $product)
{{$product->name}} <a href="/products/accept/{{$product->id}}" class="btn btn-danger"> Reject Request </a> <a href="/products/reject/{{$product->id}}" class="btn btn-primary"> Accept Request </a>
    @endforeach
@endsection
