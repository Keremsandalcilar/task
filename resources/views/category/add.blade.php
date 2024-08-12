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
                    <th> Kategori Ekleme </th>
                    <form method="POST" action="{{ route('categorycreate') }}"> @csrf 
                        <label for="title">Title</label>
                        <input id="title" type="text" name="title" required>
                        <label for="description" >Description</label> 
                        <input id="description" type="text" name="description" required>
                        <label for="status" >Status</label>
                        <input id="status" type="text" name="status" required>     
                        <button type="submit" class="btn btn-success btn-xs" >Kaydet</button>
                    </form>
                </div> 
            </div>
@endsection

