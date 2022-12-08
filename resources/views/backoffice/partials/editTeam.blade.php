<div class="w-50 m-auto">
    <form action="/team/update/{{ $teams->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            {{-- <input>{{ $teams->name }}</input> --}}
            <input type="text" name="name" value="{{ old('name', $teams->name) }}" id="">

        </div>
        <div>
            <label for="name">Surname</label>
            <input type="text" name="surname" value="{{ old('surname', $teams->surname) }}" id="">



        </div>
        <input type="file" required name="src">

        <div>
            <label for="floating_email">Desciption</label>
        </div>
        <textarea name="description" id="" class="w-100" cols="30" rows="10">{{ $teams->description }}</textarea>
        {{-- <span>{{ $teams->descrition }}</span> --}}
        <div>

            <div class="d-flex justify-content-between">

                <select name="role_id" id="">
                    @foreach ($teamRoles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>

                <button class="p-2 border rounded m-2" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
