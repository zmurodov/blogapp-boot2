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
      <div class="card-header card-header-primary h3">
         Create a new category
      </div>
      <div class="card-body">
      <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="name_id" class="bmd-label-floating">Category name</label>
               <input type="text" name="name" class="form-control" id="name_id" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
         </form>
      </div>
   </div>
@endsection