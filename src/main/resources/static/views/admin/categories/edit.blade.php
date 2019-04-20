@extends('layouts.admin')

@section('content')
   @if (count($errors) > 0)
      <ul class="list-group mb-3">
         @foreach ($errors->all() as $error)
            <li class="list-group-item text-danger">{{$error}}</li>
         @endforeach
      </ul>
   @endif
   <div class="card">
      <div class="card-header card-header-primary">
         <h4 class="card-title">Edit category: {{ $category->name }}</h4>
      </div>
      <div class="card-body">
      <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="name_id" class="bmd-label-floating">Category name</label>
               <input type="text" name="name" class="form-control" id="name_id" value="{{$category->name}}" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary float-right"><i class="material-icons">refresh</i> Update</button>
            </div>
         </form>
      </div>
   </div>
@endsection