<div>
    @foreach ($banners as $banner)
        <div class="card text-center">
            <div class="card-header">
                Banner ID :
                <span>{{ $banner->id }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $banner->name }}</h5>
                <img src="src/banners/{{ $banner->banner }}" alt="">

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
