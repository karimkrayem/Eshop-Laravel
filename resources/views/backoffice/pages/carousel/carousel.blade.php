@extends('backoffice.layouts.app')
@section('content')
    <h1 class="text-center m-5"> Choose your carousel pictures</h1>


    <div class="d-flex ">

        @foreach ($carousels as $carousel)
            {{-- <form action="/banner/update/{{ $carousel->id }}" enctype="multipart/form-data" method="post"> --}}
            {{-- @csrf
                @method('PUT') --}}
            <div>
                <div>
                    <img class="" src="src/carousels/{{ $carousel->carousel }}" alt="">
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
            </div>
            {{-- </form> --}}
        @endforeach

    </div>


    {{-- <a href="/carouselForm">Add to carousel</a> --}}
@endsection
