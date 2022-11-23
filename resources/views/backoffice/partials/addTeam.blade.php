<div class="d-flex justify-center ">

    <form action="/teamform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="name">Surname</label>
            <input type="text" name="surname">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="src">Description</label>
            <input type="file" name="src">
        </div>

        <div>
            <select name="role_id" id="">
                @foreach ($teamRoles as $role)
                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">ADD</button>
    </form>

</div>
