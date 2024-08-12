@extends('layouts.app')

@section('content')

@if ($errors->any())
 <div class="alert alert-danger"> 
<ul> 
@foreach ($errors->all() as $error) 
<li>{{ $error }}</li>
 @endforeach
 </ul> 
</div>
 @endif

            <div class="col-md-12">
                <div>
                    <th> Ürün Ekleme </th>
                    <form method="POST" action="{{ route('productcreate') }}"> @csrf 
                        <label for="title">Title</label>
                        <input id="title" type="text" name="title" required>
                        <label for="category_id">CategoryId</label>
                        <input id="category_id" type="text" name="category_id">
                        <label for="barcode" >Barcode</label> 
                        <input id="barcode" type="text" name="barcode" required>
                        <label for="stock" >Stock</label>
                        <input id="stock" type="text" name="stock" required>
                        <label for="price" >Price</label>
                        <input id="price" type="text" name="price" required>        
                        <button type="submit" class="btn btn-success btn-xs" >Kaydet</button>
                    </form>
                </div>    
            </div>

@endsection

