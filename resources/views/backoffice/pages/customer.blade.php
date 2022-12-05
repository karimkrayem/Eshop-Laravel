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

        .fontchange {
            font-weight: 100;
        }
    </style>
    <table class="table pb-5 mt-5 mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
                <th scope="col">Read</th>
                <th scope="col">Archive</th>
            </tr>
        </thead>
        @foreach ($messages as $message)
            <tbody class="font-weight-bold">
                <tr class='{{ $message->read == true ? 'fontchange' : 'customerMessage' }}'>
                    <th class="" scope="row">{{ $message->id }}</th>
                    <td class="">{{ $message->name }}</td>
                    <td>
                        <p class="font-weight-bolder">{{ $message->email }}</p>
                    </td>
                    <td>{{ $message->comment }}</td>
                    <td>

                        <a id="test" class="openCostumerMessage" href="/showMessage/{{ $message->id }}">Open</a>

                    </td>
                    <td>

                        <a id="test" class="openCostumerMessage" href="/archive/{{ $message->id }}">Archive</a>

                    </td>
                </tr>

            </tbody>
        @endforeach
    </table>
@endsection
