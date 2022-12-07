<div>

    <h1 class="text-center m-5">All Articles</h1>
    <h5><a href="/articleform" class="text-primary m-5">+ Add an article</a></h5>
    <div class="d-flex flex-wrap justify-content-center  mx-auto">
        @forelse ($articles as $article)
            <div class="card text-center w-25 m-1">
                <div class="card-header">
                    Product ID :
                    <span>{{ $article->id }}</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Author:</h5>

                    <p class="card-text">{{ $article->user->name }}</p>
                    <h5 class="card-title">Title:</h5>

                    <p class="card-text">{{ $article->title }}</p>
                    <h5 class="card-title">Content:</h5>

                    <p class="card-text">{{ $article->content }}</p>
                    <h5 class="card-title">Image:</h5>
                    <img src="{{ $article->src }}" alt="">
                    <a href="/article/edit/{{ $article->id }}" class="btn btn-primary">Edit Product</a>
                </div>


                <form action="" method="">
                    <div><a href="/publish/{{ $article->id }}">
                            <h5 class="text-center btn btn-success p-2 m-auto mb-2 ">Publish</h5>
                        </a></div>
                </form>

                <form action="/article/delete/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger " type="submit">Delete</button>

                </form>



            </div>
        @empty
            <h5 class="text-center">No Articles</h5>
        @endforelse

    </div>
</div>


<div>
    <h1 class="text-center m-5">Pubished articles</h1>

    <div class="d-flex flex-wrap justify-content-center  mx-auto">
        @forelse ($published as $publish)
            <div class="card text-center w-25 m-1">
                <div class="card-header">
                    Product ID :
                    <span>{{ $publish->id }}</span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Author:</h5>

                    <p class="card-text">{{ $publish->user->name }}</p>
                    <h5 class="card-title">Title:</h5>

                    <p class="card-text">{{ $publish->title }}</p>
                    <h5 class="card-title">Content:</h5>

                    <p class="card-text">{{ $publish->content }}</p>
                    <h5 class="card-title">Image:</h5>
                    <img src="{{ $publish->src }}" alt="">
                    <a href="/article/edit/{{ $publish->id }}" class="btn btn-primary">Edit Product</a>
                </div>

                @if ($publish->published == false)
                    <form action="" method="">
                        <div><a href="/publish/{{ $publish->id }}">
                                <h5 class="p-5 text-center bg-success">Publish</h5>
                            </a></div>
                    </form>
                @endif


                <form action="/article/delete/{{ $publish->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger " type="submit">Delete</button>

                </form>
            </div>
        @empty
            <h5 class="text-center">No articles published</h5>
        @endforelse
    </div>

</div>
