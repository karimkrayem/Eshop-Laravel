@extends('backoffice.layouts.app')
@section('content')
    <div>

        @foreach ($star as $star)
            <span>STAR PRODUCT : {{ $star->product->name }}</span>
            <a href="/star/edit/{{ $star->id }}" class="btn btn-primary">Edit Star Product</a>
        @endforeach
    </div>
@endsection
