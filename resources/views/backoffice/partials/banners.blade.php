<h1 class="m-5 text-center "> EDIT BANNERS</h1>
<div class=" d-flex m-auto justify-content-center flex-wrap">
    @foreach ($banners as $banner)
        <div class="card text-center w-25 m-1">
            <div class="card-header">
                Banner ID : {{ $banner->id }}

            </div>
            <div class="card-body m-0 p-0">
                {{-- <h5 class="card-title">{{ $banner->name }}</h5> --}}
                <img class="w-100" src="src/banners/{{ $banner->banner }}" alt="">

                {{-- <a href="/article/edit/{{ $article->id }}" class="btn btn-primary">Edit Product</a> --}}
            </div>
            {{-- 
            <form action="/banner/delete/{{ $banner->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger " type="submit">Delete</button>
            </form> --}}

            <a href="/banner/edit/{{ $banner->id }}" class="btn btn-primary">Edit Banner</a>
        </div>
    @endforeach
</div>
