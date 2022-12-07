@extends('backoffice.layouts.app')
@section('content')
    <h1 class="text-center m-5">Choose your star product</h1>
    <div class="d-flex justify-content-center">
        <form action="/star/update/{{ $star->id }}" method="post">
            @csrf
            @method('PUT')
            <select class="p-3" name="product_id" id="">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
            <button class="border rounded p-2 m-2" type="submit">Submit</button>
        </form>
    </div>
@endsection
