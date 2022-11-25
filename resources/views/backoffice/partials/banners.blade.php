<div>
    @foreach ($banners as $banner)
        <div class="card text-center">
            <div class="card-header">
                Banner ID :
                <span>{{ $banner->id }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Single Blog</h5>
                <img src="{{ $banner->singleBlog }}" alt="">
                <h5 class="card-title">Single Product</h5>
                <img src="{{ $banner->singleProduct }}" alt="">
                <h5 class="card-title">Product List</h5>
                <img src="{{ $banner->productList }}" alt="">
                <h5 class="card-title">Contact</h5>
                <img src="{{ $banner->contact }}" alt="">
                <h5 class="card-title">Account</h5>
                <img src="{{ $banner->account }}" alt="">
                <h5 class="card-title">About</h5>
                <img src="{{ $banner->about }}" alt="">
                <h5 class="card-title">Login</h5>
                <img src="{{ $banner->login }}" alt="">
                <h5 class="card-title">Checkout</h5>
                <img src="{{ $banner->checkout }}" alt="">
                {{-- <a href="/article/edit/{{ $article->id }}" class="btn btn-primary">Edit Product</a> --}}
            </div>

            <form action="/banner/delete/{{ $banner->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger " type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</div>
