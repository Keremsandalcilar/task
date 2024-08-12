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
    <div class="col-md-10">
        <div class="row col-md-10 custyle">
            <table class="table table-striped custab">
                <form method="POST" action="{{ route('productupdate', $product->id) }}">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{ $product->id }}">

                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" value="{{ $product->title }}">

                    <label for="category_id">Category</label>
                    <select id="category_id" name="category_id" {{ $product->is_locked ? 'disabled' : '' }}>
                        <option value="" disabled selected>Kategori Seçin</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>

                    <label for="barcode">Barcode</label>
                    <input type="text" id="barcode" name="barcode" value="{{ $product->barcode }}">

                    <label for="stock">Status</label>
                    <input type="text" id="stock" name="stock" value="{{ $product->stock }}">

                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" value="{{ $product->price }}">

                    <button type="submit" class="btn btn-success btn-xs">Güncelle</button>
                </form>
        </div>
    </div>
@endsection