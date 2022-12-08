@extends('backoffice.layouts.app')
@section('content')
    <h1 class="text-center m-5">Archives</h1>

    <a href="/contactUs" class="text-primary m-5">Back to Mails</a>
    <div class="d-flex justify-content-center">

        <div class=" m-auto d-flex flex-wrap justify-content-center ">

            @foreach ($messages as $message)
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title m-2">Name : {{ $message->name }}</h5>
                        <h6 class="card-subtitle mb-2  m-2 text-muted"> Email : {{ $message->email }}</h6>
                        <p class="card-text m-2 "> Comment :
                            {{ $message->comment }}</p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
