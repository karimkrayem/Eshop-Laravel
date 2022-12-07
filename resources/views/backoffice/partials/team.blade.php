<h1 class="text-center">Team</h1>
<h5><a href="/addTeam" class="text-primary m-5">+ Add team member</a></h5>

<div class="d-flex flex-wrap justify-content-center m-2">
    @foreach ($teams as $team)
        <div class="card text-center m-2 ">
            <div class="card-header">
                Member ID :
                <span>{{ $team->id }}</span>
            </div>
            <div class="card-body">



                <div>
                    {{ $team->src }}
                    <img src="{{ $team->src }}" alt="">
                </div>
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
