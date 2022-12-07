<div>
    <h5>All the available tags for the Article blogs<i class="fa fa-transgender" aria-hidden="true"></i></h5>
    <ul>
        @foreach ($tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
</div>

<h6 class="m-2">Add Tags</h6>
<div class="d-flex justify-center ">

    <form action="/tagform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <button class="rounded border p-2" type="submit">ADD</button>
    </form>

</div>
