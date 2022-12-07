@extends('backoffice.layouts.app')
@section('content')
    <h1 class="text-center m-5">Mail </h1>

    <a href="/contactUs" class="text-primary m-5">Back to Mails</a>
    <div class="d-flex justify-content-center">

        <div class=" m-auto">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title m-2">Name : {{ $messages->name }}</h5>
                    <h6 class="card-subtitle mb-2  m-2 text-muted"> Email : {{ $messages->email }}</h6>
                    <p class="card-text m-2 "> Comment :
                        {{ $messages->comment }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
