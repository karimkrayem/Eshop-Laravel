<div>
    <h1>Test</h1>

    {{-- <span>{{ dd($product->tags) }}</span> --}}
    @foreach ($product->tags as $tag)
        <span>{{ $tag->name }}</span>
    @endforeach

    @foreach ($test as $test)
        <div>
            {{ $test->description }}
            @foreach ($test->tags as $tag)
                <span>{{ $tag->name }}</span>
            @endforeach
        </div>
    @endforeach


</div>
