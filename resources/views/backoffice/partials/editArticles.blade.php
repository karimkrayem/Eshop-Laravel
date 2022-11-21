<div class="w-50 mx-auto bg-light">
    <form action="/article/update/{{ $articles->id }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $products->name) }}" id="">
            {{-- <span>{{ $products->name }}</span> --}}

        </div>
        <div>
            <label for="floating_email">Description</label>
        </div>
        <textarea class="w-100" name="description" id="" cols="30" rows="10">{{ $products->description }}</textarea>
        {{-- <span>{{ $users->email }}</span> --}}

        <div class="d-flex justify-content-evenly">
            <div>

                <label for="price">Price</label>
                <input type="text" value="{{ old('price', $products->price) }}" name="price">
            </div>

            {{-- <span>{{ $products->price }}</span> --}}

            <div>
                <label for="stock   ">Stock</label>
                <input type="text" name="stock" value="{{ old('stock', $products->stock) }}">
                {{-- <span>{{ $products->stock }}</span> --}}

            </div>

            <div class="d-flex flex-column  ">

                {{-- <div>{{ $products->category->name }}</div>
                <input type="text" name="category_id" list="category" value="{{ old('category_id') }}">
                <datalist id='category'>
                  
                </datalist> --}}
                <div>

                    <label for="category_id">Category</label>
                </div>
                <div>

                    <select class="p-2 border border-none bg-light" name="category_id" id="">
                        <option value="{{ $products->category->id }}">{{ $products->category->name }}
                        <option disabled value="">-------
                        </option>
                        @foreach ($categories as $category)
                            @if ($products->category->name != $category->name)
                                <option value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>

                {{-- <input type="file" value="{{}}" name="" id=""> --}}
                {{-- <img src="{{ $products->images }}" alt=""> --}}

            </div>
        </div>
        <div>

            @foreach ($images as $image)
                @if ($image->product_id == $products->id)
                    <img class="w-25" src="{{ $image->image }}" alt="">
                @endif
            @endforeach
        </div>
        <div class="d-flex justify-content-end">

            <button class="p-3 m-3 border border-solid  " type="submit">Submit</button>
        </div>
    </form>
</div>
$table->id();
$table->string('title');
$table->string('content');
$table->text('src');
// $table->foreignId('user_id')->nullable()->constrained();
$table->timestamps();
