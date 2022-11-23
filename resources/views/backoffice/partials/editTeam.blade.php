<div>
    <form action="/team/update/{{ $teams->id }}" method="post">
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

        <div><img src="{{ $teams->src }}" alt="">{{ $teams->src }}</div>
        <input type="file" name="src" id="">
        <div>
            <label for="floating_email">Desciption</label>
        </div>
        <textarea name="description" id="" cols="30" rows="10">{{ $teams->descrition }}</textarea>
        {{-- <span>{{ $teams->descrition }}</span> --}}
        <div>

            <div>

                <select name="role_id" id="">
                    @foreach ($teamRoles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
