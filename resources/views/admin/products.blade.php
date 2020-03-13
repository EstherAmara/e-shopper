@extends('layouts.app')

@section('content')
    <table class="table table-bordered">
        <tr>
            <th> Name </th>
            <th> Web Id</th>
            <th> Amount </th>
            <th> Quantity </th>
            <th> Available </th>
            <th> Condition </th>
            <th> Brand </th>
            <th> Status </th>
            <th> Action </th>
        </tr>
        @foreach( $products as $product)
            <tr>
                <td> {{$product->name}} </td>
                <td> {{$product->web_id}} </td>
                <td> {{$product->amount}} </td>
                <td> {{$product->quantity}} </td>
                <td> {{$product->available}} </td>
                <td> {{$product->condition}} </td>
                <td> {{$product->brand}} </td>
                <td> {{$product->status}} </td>
                <td>
                    <a href="/products/accept/{{$product->id}}" class="btn btn-warning"> Accept Request </a>

                    <a href="/products/reject/{{$product->id}}" class="btn btn-danger"> Reject Request </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
