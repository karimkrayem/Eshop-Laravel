<form action="/productform/store" enctype="multipart/form-data" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description">
    </div>


    <select name="category_id" id="">

        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label for="files" class="">Upload Product Images:</label>
    <input type="file" name="src[]" class="form-control" accept="image/*" multiple>



    <button type="submit">ADD</button>
</form>

<div>




    <h1>Test</h1>

    {{-- <span>{{ dd($product->tags) }}</span> --}}



</div>
