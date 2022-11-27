@extends('backoffice.layouts.app')
@section('content')
    <div>
        <form action="/star/update/{{ $star->id }}" method="post">
            @csrf
            @method('PUT')
            <select name="product_id" id="">
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
