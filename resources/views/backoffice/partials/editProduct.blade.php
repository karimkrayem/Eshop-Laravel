<h1 class="text-center m-5"> EDIT PRODUCT</h1>
<a href="/allproducts" class="text-primary m-5">All articles</a>



<div class="w-50 m-5 mx-auto bg-light editformproduct">
    {{-- <style>
        .editformproduct {
            height: 50vh;
        }
    </style> --}}
    <form class="m-5" action="/product/update/{{ $products->id }}" enctype="multipart/form-data" method="post">
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
            <div>
                <label for="slug   ">Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $products->slug) }}">
                {{-- <span>{{ $products->stock }}</span> --}}

            </div>


            <div class="d-flex flex-column  ">

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
                <div>

                    <label for="size">Size</label>
                </div>
                <div>

                    <select class="p-2 border border-none bg-light" name="size_id" id="">
                        <option value="{{ $products->size->id }}">{{ $products->size->size }}
                        <option disabled value="">-------
                        </option>
                        @foreach ($sizes as $size)
                            {{-- @if ($products->size->size != $size->name) --}}
                            <option value="{{ $size->id }}">{{ $size->size }}
                            </option>
                            {{-- @endif --}}
                        @endforeach
                    </select>
                </div>

                {{-- <input type="file" value="{{}}" name="" id=""> --}}
                {{-- <img src="{{ $products->images }}" alt=""> --}}

            </div>
        </div>
        <div class="d-flex">
            <div>

                {{-- @foreach ($images as $image) --}}
                {{-- @if ($image->product_id == $products->id) --}}
                <img class="w-25"
                    src="{{ asset('src/products/' . $images->where('product_id', $products->id)->first()->image) }}"
                    alt="">
                {{-- @endif --}}
                {{-- @endforeach --}}
            </div>
            <input type="file" name="image[]" class="form-control" required multiple>


            <div class="d-flex justify-content-end">

                <button class="p-3 m-3 border border-solid  " type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
