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

          <section class="uk-section" style="background-color: #bebebe">
            <div class="uk-container">
              <th> Kategori Ekleme </th>
                  <form method="POST" id="editCategoryForm" action="{{ route('categoryupdate',$category->id) }}" 
                    class="uk-grid-medium uk-child-width-1-1 uk-width-1-2@m" uk-grid>
                    @csrf
                            <input type="hidden" id="id" name="id" value="{{ $category->id }}">
                    <div>
                      <label for="title" class="uk-form-label uk-width-1-1">Title</label>
                      <input id="title" name="title" class="uk-input uk-width-1-1" type="text" value="{{ $category->title }}">
                    </div>
                    <div>
                      <label for="description" class="uk-form-label uk-width-1-1">Description</label>
                      <input id="description" name="description" class="uk-input uk-width-1-1" type="text" value="{{ $category->description }}">
                    </div>
                    <div>
                      <label for="status" class="uk-form-label uk-width-1-1">Status</label>
                      <input id="status" name="status" class="uk-input uk-width-1-1" type="text" value='{{ $category->status}}'>

                      <br><br><button type="submit" class="btn btn-success btn-xs">Güncelle</button>
                    </div>
                </form>
            </div>
          </section>
@endsection



