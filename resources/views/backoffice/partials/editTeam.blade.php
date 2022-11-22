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
            <span>{{ $teams->surname }}</span>

        </div>
        <div>
            <label for="floating_email">Desciption</label>
        </div>
        <span>{{ $teams->descrition }}</span>
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
