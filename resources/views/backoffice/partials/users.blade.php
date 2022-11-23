<div class="d-flex flex-wrap  ">
    @foreach ($users as $user)
        <div class=" m-5 p-5">
            <h1>{{ $user->name }}</h1>


            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $user->email }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $user->role->role }}</p>
            <img src="{{ $user->src }}" alt="">
            <div>{{ $user->src }}</div>
            {{-- @can('check-admin', $user->role_id) --}}
            <a href="/user/edit/{{ $user->id }}">Edit</a>

            <form action="/user/delete/{{ $user->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>


            </form>
            {{-- @endcan --}}

            {{-- <form action="/article/delete/{{ $article->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>

    </form>
    <div><a href="/article/edit/{{ $article->id }}">edit</a></div> --}}
        </div>
    @endforeach
</div>
