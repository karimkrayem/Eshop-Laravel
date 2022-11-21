<div>
    <form action="/user/update/{{ $users->id }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <span>{{ $users->name }}</span>

        </div>
        <div>
            <label for="floating_email">Email
                address</label>
        </div>
        <span>{{ $users->email }}</span>
        <div>

            <div>

                <select name="role_id" id="">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
