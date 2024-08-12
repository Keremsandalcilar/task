@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <table class="table table-striped custab">
            <thead style="background-color:#5a2b2b">
                <tr>
                    <th></th>
                    <th style="color:white ">İd</th>
                    <th style="color:white ">Title</th>
                    <th style="color:white ">Description</th>
                    <th style="color:white ">Status</th>
                    <th class="text-center" style="color:white ">Düzenleme/Silme</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr><td> <input type="checkbox"></td>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->status }}</td>
                        <td class="text-center">
                            <a class='btn btn-info btn-xs' href="{{ url('categoryedit', $category->id) }}"><span
                                    class="glyphicon glyphicon-edit"></span> Düzenle</a>
                            <a onclick="confirmation(event)" href="{{ url('categorydelete', $category->id) }}"
                                class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span>Sil</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
