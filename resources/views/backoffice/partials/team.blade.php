<div>
    @foreach ($teams as $team)
        <div class="card text-center">
            <div class="card-header">
                Member ID :
                <span>{{ $team->id }}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Name:</h5>

                <p class="card-text">{{ $team->name }}</p>
                <h5 class="card-title">Surname:</h5>
                <p class="card-text"> {{ $team->surname }}</p>
                <h5 class="card-title">Description:</h5>

                <p class="card-text">{{ $team->description }}</p>
                <p class="card-text">Role : {{ $team->role->role }}</p>

                <a href="/team/edit/{{ $team->id }}" class="btn btn-primary">Edit Member</a>
            </div>

            <form action="/team/delete/{{ $team->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger " type="submit">Delete</button>

            </form>
        </div>
    @endforeach
</div>
