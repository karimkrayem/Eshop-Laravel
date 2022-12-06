<div>
    @foreach ($articles as $article)
        <div class="card text-center">
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

                <p class="card-text">{{ $article->src }}</p>

                <a href="/article/edit/{{ $article->id }}" class="btn btn-primary">Edit Product</a>
            </div>


            <form action="" method="">
                <div><a href="/publish/{{ $article->id }}">
                        <h5>Publish</h5>
                    </a></div>
            </form>

            <form action="/article/delete/{{ $article->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger " type="submit">Delete</button>

            </form>



        </div>
    @endforeach
</div>
