<div>
    <h1>All the available tags for the Article blogs<i class="fa fa-transgender" aria-hidden="true"></i></h1>
    @foreach ($tags as $tag)
        <span>{{ $tag->name }}</span>
    @endforeach
</div>

<div class="d-flex justify-center ">

    <form action="/tagform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <button type="submit">ADD</button>
    </form>

</div>
