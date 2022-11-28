<div>
    @foreach ($products as $product)
        <div class="card text-center">
            <div class="card-header">
                Product ID :
                <span>{{ $product->id }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Name:</h5>

                @foreach ($images as $image)
                    @if ($image->product_id == $product->id)
                        {{-- {{ dd($image->image) }} --}}

                        <img src="src/products/{{ $image->image }}" alt="">
                    @endif
                @endforeach
                <p class="card-text">{{ $product->name }}</p>
                <h5 class="card-title">Description:</h5>

                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">price : {{ $product->price }}</p>
                <p class="card-text">stock : {{ $product->stock }}</p>
                <p class="card-text">category: {{ $product->category->name }}</p>
                <p class="card-text">Size: {{ $product->size->size }}</p>
                <a href="/product/edit/{{ $product->id }}" class="btn btn-primary">Edit Product</a>
            </div>

            <form action="/product/delete/{{ $product->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger " type="submit">Delete</button>

            </form>
        </div>
    @endforeach
</div>
