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
                    <th> Kullanıcı Ekleme </th>
                    <form method="POST" action="{{ route('usercreate') }}"> @csrf 
                        <label for="title">Title</label>
                        <input id="title" type="text" name="title" required>

                        <label for="username">Username</label>
                        <input id="username" type="username" name="username" required>

                        <label for="password" >Password</label> 
                        <input id="password" type="password" name="password" required>

                        <label for="password_confirmation" >Confirm Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required>

                        <button type="submit" class="btn btn-success btn-xs" >Kaydet</button>
                    </form>
                </div>         
            </div>
@endsection


