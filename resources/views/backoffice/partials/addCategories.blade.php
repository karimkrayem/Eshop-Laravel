<div>
    <h1>All the available categories for the products<i class="fa fa-transgender" aria-hidden="true"></i></h1>
    @foreach ($categories as $category)
        <span>{{ $category->name }}</span>
    @endforeach
</div>

<div class="d-flex justify-center ">

    <form action="/categoryform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>


        <button type="submit">ADD</button>
    </form>

</div>
