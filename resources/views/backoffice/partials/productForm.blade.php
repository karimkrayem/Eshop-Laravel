<form action="/product/store" method="POST">
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


    @foreach ($tags as $tag)
        <p>

            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" id=""> <label
                for="tags">{{ $tag->name }}</label>
        </p>
        {{-- <input type="checkbox" name="" id=""> --}}
    @endforeach

    <button type="submit">ADD</button>
</form>

<div>




    <h1>Test</h1>

    {{-- <span>{{ dd($product->tags) }}</span> --}}



</div>
