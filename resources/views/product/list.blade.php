@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="row col-md-12 custyle">
            <table class="table table-striped custab">
                <thead style="background-color:#5a2b2b">
                    <tr>
                        <th></th>
                        <th style="color:white ">Id</th>
                        <th style="color:white ">Title</th>
                        <th style="color:white ">CategoryId</th>
                        <th style="color:white ">Barcode</th>
                        <th style="color:white ">Stock</th>
                        <th style="color:white ">Price</th>
                        <th class="text-center" style="color:white ">Düzenleme/Silme</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       @foreach ($products as $product)
                            <td> <input type="checkbox"></td>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->price }}</td>
                            <td class="text-center">
                                <a class='btn btn-info btn-xs' href="{{ url('productedit', $product->id) }}"><span
                                        class="glyphicon glyphicon-edit"></span> Düzenle</a>
                                <a onclick="confirmation(event)" href="{{ url('productdelete', $product->id) }}"
                                    class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span>Sil</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
