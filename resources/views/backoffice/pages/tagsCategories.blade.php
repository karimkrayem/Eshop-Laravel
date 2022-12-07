@extends('backoffice.layouts.app')
@section('content')
    <div class="d-flex justify-content-center">

        <div class="m-5">
            @include('backoffice.partials.addTags')
        </div>
        <div class="m-5">
            @include('backoffice.partials.addCategories')
        </div>

    </div>
@endsection
