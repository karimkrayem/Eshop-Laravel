@extends('backoffice.layouts.app')
@section('content')
    <div>

    </div>
    @foreach ($carousels as $carousel)
        {{-- <form action="/banner/update/{{ $carousel->id }}" enctype="multipart/form-data" method="post"> --}}
        {{-- @csrf
            @method('PUT') --}}
        <div>
            <img src="src/carousels/{{ $carousel->carousel }}" alt="">
        </div>
        {{-- <form action="/carousel/delete/{{ $carousel->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger " type="submit">Delete</button>

        </form> --}}

        <div class="d-flex">

            {{-- <input type="file" name="carousel" multiple id=""> --}}
            <a href="/carousel/edit/{{ $carousel->id }}">EDIT</a>
            {{-- <button type="submit">l</button> --}}
        </div>
        {{-- </form> --}}
    @endforeach

    {{-- <a href="/carouselForm">Add to carousel</a> --}}
@endsection
