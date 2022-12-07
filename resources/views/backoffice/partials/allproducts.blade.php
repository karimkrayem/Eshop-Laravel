        <h1 class="text-center">All products</h1>
        <h5><a href="/productform" class="text-primary m-5">+ Add a product</a></h5>
        <div class="d-flex pproduct  flex-wrap justify-content-center ">
            <style>
                .pp-img {
                    width: 50px;
                    /* display: flex */
                }
            </style>

            @foreach ($products as $product)
                <div class="card  text-center m-3 p-2 ">
                    <div class="card-header">
                        Product ID :
                        <span>{{ $product->id }}</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name:</h5>

                        <p class="card-text">{{ $product->name }}</p>
                        @foreach ($images as $image)
                            @if ($image->product_id == $product->id)
                                {{-- {{ dd($image->image) }} --}}

                                <img class="pp-img" src="src/products/{{ $image->image }}" alt="">
                            @endif
                        @endforeach

                        <div class="d-flex justify-content-center">

                            <h6 class="ms-1 me-1" for="">Price :</h6>
                            <p class="card-text"> {{ $product->price }}</p>
                            <h6 class="ms-1 me-1" for="">Stock :</h6>
                            <p class="card-text"> {{ $product->stock }}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6 class="ms-1 me-1" for="">Category :</h6>

                            <p class="card-text me-1"> {{ $product->category->name }}</p>
                            <h6 class="ms-1 me-1" for="">Size :</h6>

                            <p class="card-text me-1"> {{ $product->size->size }}</p>
                        </div>

                        <a href="/product/edit/{{ $product->id }}" class="btn btn-primary rounded">Edit Product</a>
                    </div>

                    <form class="" action="/product/delete/{{ $product->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger rounded " type="submit">Delete</button>

                    </form>
                </div>
            @endforeach
        </div>
