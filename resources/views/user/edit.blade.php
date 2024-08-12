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

          <section class="uk-section" style="background-color: #5a2b2b">
            <div class="uk-container">
              <div style="color:white;font-size: 20px;">Kullanıcı Düzenleme</div><br>
                  <form method="POST" id="editUserForm" action="{{ route('userupdate',$user->id) }}" 
                    class="uk-grid-medium uk-child-width-1-1 uk-width-1-2@m" uk-grid>
                    @csrf
                            <input type="hidden" id="id" name="id" value="{{ $user->id }}">
                    <div>
                      <label for="title" class="uk-form-label uk-width-1-1" style="color:white;font-size: 15px;">Title</label>
                      <input id="title" name="title" class="uk-input uk-width-1-1" type="text" style="font-weight: bold;" value="{{ $user->title }}">
                    </div>
                    <div>
                      <label for="username" class="uk-form-label uk-width-1-1" style="color:white;font-size: 15px;">Username</label>
                      <input id="username" name="username" class="uk-input uk-width-1-1" type="text" style="font-weight: bold;" value="{{ $user->username }}">
                    </div>
                    <div>
                      <label for="password" class="uk-form-label uk-width-1-1" style="color:white;font-size: 15px;">Password</label>
                      <input id="password" name="password" class="uk-input uk-width-1-1" type="password" >

                      <br><br><button type="submit" class="btn btn btn-xs" style="font-weight: bold;">Güncelle</button>
                    </div>
                </form>
            </div>
          </section>
@endsection