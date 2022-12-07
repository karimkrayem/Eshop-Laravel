<h1 class="text-center">Add a Team member</h1>
<h5><a href="/team" class="text-primary m-5">Team member</a></h5>


<div class=" d-flex justify-content-center">

    <form action="/teamform/store" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" required name="name">
        </div>
        <div>
            <label for="name">Surname</label>
            <input type="text" required name="surname">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" required name="description">
        </div>
        <div class="mt-3 mb-3">
            <label for="src">Profile Image </label>
            <input type="file" required name="src">
        </div>

        <div>
            <label for="src">Role </label>
            <select class="p-2" required name="role_id" id="">

                @foreach ($teamRoles as $role)
                    <option class="p-2" value="{{ $role->id }}">{{ $role->role }}</option>
                @endforeach
            </select>
        </div>

        <button class="bg-success text-white border rounded mt-3 mb-2 p-2 d-flex " type="submit">ADD</button>
    </form>

</div>
