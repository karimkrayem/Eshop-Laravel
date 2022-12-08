<h1 class="text-center m-5">All users</h1>
<div class="d-flex flex-wrap w-75 m-auto  ">
    @foreach ($users as $user)
        <div class=" m-2 p-4  border rounded">
            <h4>Name : {{ $user->name }}</h4>


            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">E-mail : {{ $user->email }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Role : {{ $user->role->role }}</p>
            <img src="{{ $user->src }}" alt="">

            <img src='src/users/{{ $user->src }}' alt="">
            <div></div>
            {{-- @can('check-admin', $user->role_id) --}}

            <div class="d-flex">

                <a href="/user/edit/{{ $user->id }}" class="border rounded bg-primary text-white p-2">Edit</a>

                <form action="/user/delete/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="border rounded bg-danger text-white p-2" type="submit">Delete</button>


                </form>
            </div>

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
