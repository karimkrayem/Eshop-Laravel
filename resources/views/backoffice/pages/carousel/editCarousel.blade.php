@extends('backoffice.layouts.app')
@section('content')
    <h1 class="text-center m-5">Edit carousel picture</h1>
    <a class="m-5 text-primary" href="/carousel">Carousel pictures </a>
    @foreach ($allCarousel as $img)
        <div class="d-flex">

            <img src="public/src/carousels/{{ $img->carousel }}" alt="">
        </div>
    @endforeach

    <form action="/carousel/update/{{ $carousels->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        {{-- <div>
            <img src="src/carousels/{{ $carousel->carousel }}" alt="">
        </div> --}}
        {{-- <form action="/carousel/delete/{{ $carousel->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger " type="submit">Delete</button>
        </form> --}}


        <div class="d-flex justify-content-center border rounded w-50 m-auto mt-5">

            <input class="p-3 m-3" type="file" required name="carousel" multiple id="">
            {{-- <a href="/carousel/edit/{{ $carousel->id }}">Add to carouse</a> --}}
            <button class="p-3 m-3 border border-solid  " type="submit">Add To carousel</button>

        </div>
    </form>
@endsection
