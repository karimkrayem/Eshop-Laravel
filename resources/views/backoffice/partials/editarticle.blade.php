<h1 class="text-center m-5"> EDIT ARTICLE</h1>
<a href="/allarticles" class="text-primary m-5">All articles</a>

<div class="w-50 mx-auto bg-light">

    <form action="/article/update/{{ $articles->id }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="Title">Title</label>
            <input type="text" name="title" value="{{ old('name', $articles->title) }}" id="">
            {{-- <span>{{ $products->name }}</span> --}}

        </div>
        <div>
            <label for="Title">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $articles->slug) }}" id="">
            {{-- <span>{{ $products->name }}</span> --}}

        </div>
        <div>
            <label for="floating_email">Content</label>
        </div>
        <textarea class="w-100" name="content" id="" cols="30" rows="10">{{ $articles->content }}</textarea>
        {{-- <span>{{ $users->email }}</span> --}}

        <div class="d-flex justify-content-evenly">
            <div>

                <label for="price">Author</label>
                <input type="text" value="{{ old('', $articles->user->name) }}" name="user_id">
            </div>

            {{-- <span>{{ $products->price }}</span> --}}


            <div class="d-flex flex-column  ">

                {{-- <div>{{ $products->category->name }}</div>
                <input type="text" name="category_id" list="category" value="{{ old('category_id') }}">
                <datalist id='category'>
                  
                </datalist> --}}
                {{-- <div>

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
                </div> --}}

                {{-- <input type="file" value="{{}}" name="" id=""> --}}
                {{-- <img src="{{ $products->images }}" alt=""> --}}

            </div>
        </div>

        <div class="d-flex justify-content-around ">

            <img name="src" class="w-25" src="{{ $articles->src }}" alt="">

            {{-- <div>

            @foreach ($images as $image)
                @if ($image->product_id == $products->id)
                    <img class="w-25" src="{{ $image->image }}" alt="">
                @endif
            @endforeach
        </div> --}}


            <button class="p-3 m-3 border border-solid  " type="submit">Submit</button>


        </div>
    </form>
</div>
