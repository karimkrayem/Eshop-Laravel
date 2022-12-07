<div>
    <h5>All the available categories for the products and articles<i class="fa fa-transgender" aria-hidden="true"></i>
    </h5>
    <ul>

        @foreach ($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
</div>

<h6 class="m-2">Add Categories</h6>
<div class="d-flex justify-center ">


    <form action="/categoryform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>


        <button class="border rounded p-2" type="submit">ADD</button>
    </form>

</div>
