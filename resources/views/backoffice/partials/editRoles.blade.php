<h1 class="text-center m-5">Edit User</h1>
<h5><a href="/users" class="text-primary m-5">All Users</a></h5>


<div class="border rounded  d-flex justify-content-center w-25 m-auto">

    <div class="m-3">
        <form action="/user/update/{{ $users->id }}" method="post">
            @csrf
            @method('PUT')
            <div>
                <h5 for="name">Name</h5>
                <span>{{ $users->name }}</span>

            </div>
            <div>
                <h5 for="floating_email">Email
                    address</h5>
            </div>
            <span>{{ $users->email }}</span>
            <div>

                <div>
                    <h5 for="floating_email">Role</h5>

                    <select name="role_id" id="">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <button class="p-2 border rounded m-3" type="submit">Submit</button>
        </form>
    </div>
</div>
