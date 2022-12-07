@extends('backoffice.layouts.app')
@section('content')
    <h1 class="text-center m-5">ALL ORDERS</h1>
    <style>
        tr {
            height: 20% !important;
        }
    </style>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Adress</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Cancel</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->adress }}</td>
                    <td>{{ $order->product_title }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>${{ $order->price }}</td>
                    <td>
                        <form action="/manage/order/{{ $order->id }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger " type="submit">Cancel</button>

                        </form>
                    </td>
                </tr>
            @empty
                <div class="text-center mt-5">
                    <h3>NO ORDERS YET</h3>
                </div>
            @endforelse




        </tbody>
    </table>
@endsection
