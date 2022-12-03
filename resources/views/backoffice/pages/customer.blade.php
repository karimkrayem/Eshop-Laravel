@extends('backoffice.layouts.app')
@section('content')
    <style>
        .customerMessage {
            font-weight: 800;
            background-color: rgba(169, 169, 169, 0.555);
            margin: 0px !important;
            height: 10px !important;
            padding: 0px !important;
        }
    </style>
    <table class="table pb-5 mt-5 mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>

            </tr>
        </thead>
        @foreach ($messages as $message)
            <tbody class="font-weight-bold">
                <tr class="customerMessage">
                    <th class="" scope="row">{{ $message->id }}</th>
                    <td class="">{{ $message->name }}</td>
                    <td>
                        <p class="font-weight-bolder">{{ $message->email }}</p>
                    </td>
                    <td>{{ $message->comment }}</td>
                </tr>

            </tbody>
        @endforeach
    </table>
@endsection

<script></script>
