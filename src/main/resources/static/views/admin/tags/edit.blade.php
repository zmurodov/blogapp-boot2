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
         <h4 class="card-title">Edit tag: {{ $tag->tag }}</h4>
      </div>
      <div class="card-body">
      <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="name_id" class="bmd-label-floating">Tag name</label>
               <input type="text" name="tag" class="form-control" id="name_id" value="{{$tag->tag}}" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary float-right"><i class="material-icons">refresh</i> Update</button>
            </div>
         </form>
      </div>
   </div>
@endsection