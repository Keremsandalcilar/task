@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('userbulkdelete') }}">
        @csrf
        <div class="col-md-12">
            <div class="row col-md-12 custyle">
                <table class="table table-striped custab ">
                    <thead style="background-color:#5a2b2b">
                        <tr>
                            <th></th>
                            <th style="color:white ">ID</th>
                            <th style="color:white ">Title</th>
                            <th style="color:white ">Username</th>
                            <th style="color:white ">Password</th>
                            <th class="text-center" style="color:white">Düzenleme/Silme</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td> <input type="checkbox" name="user_ids[]" value="{{ $user->id }}"></td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->title }}</td>
                                <td>{{ $user->username }}</td>
                                <td>************</td>
                                <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="{{ url('useredit', $user->id) }}">
                                        <span class="glyphicon glyphicon-edit"></span> Düzenle</a>
                                    <a onclick="confirmation(event)" href="{{ url('userdelete', $user->id) }}"
                                        class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>Sil</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button onclick="confirmation(event)" class="btn btn-danger btn-xs" type="submit">Seçilenleri Sil</button>
            </div>
        </div>
    </form>
@endsection
