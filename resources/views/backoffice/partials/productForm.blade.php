<div class="d-flex justify-content-center">

    <form action="/productform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <div class="m-2">
            <label for="description">Description</label>
            <input type="text" name="description">
        </div>
        <div class="m-2">
            <label for="price">Price</label>
            <input type="number" name="price">
        </div>
        <div class="m-2">
            <label for="stock">Stock</label>
            <input type="number" name="stock">
        </div>
        <div class="m-2">
            <label for="slug">Slug</label>
            <input type="string" name="slug">
        </div>


        <div class="m-2">


            <label for="stock">Category</label>


            <select name="category_id" id="">

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="m-2">

            <label for="stock">Size</label>

            <select name="size_id" id="">

                @foreach ($sizes as $size)
                    <option value="{{ $size->id }}">{{ $size->size }}</option>
                @endforeach
            </select>
        </div>

        <label for="files" class="">Upload Product Images:</label>
        <input type="file" name="image[]" class="form-control" required multiple>



        <button type="submit">ADD</button>
    </form>

</div>
