<div>
    @foreach ($products as $product)
        <div class="card text-center">
            <div class="card-header">
                Product ID :
                <span>{{ $product->id }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Name:</h5>

                <p class="card-text">{{ $product->name }}</p>
                <h5 class="card-title">Description:</h5>

                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">price : {{ $product->price }}</p>
                <p class="card-text">stock : {{ $product->stock }}</p>
                <p class="card-text">category: {{ $product->category->name }}</p>
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
{{-- 

$table->string('name')->nullable();
$table->string('description')->nullable();
$table->string('price')->nullable();
$table->string('stock')->nullable();
$table->foreignId('category_id')->constrained()->onDelete('cascade'); --}}
