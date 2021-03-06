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
         <h4 class="card-title">Create a new Post</h4>
      </div>
      <div class="card-body">
         <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group bmd-form-group">
               <label for="title" class="bmd-label-floating">Title</label>
               <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group bmd-from-group">
               <label for="category_id" class="bmd-label-floating">Category</label>
               <select name="category_id" id="category_id" class="form-control">
                  @foreach ($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
               </select>
            </div>
            <div class="bmd-from-group">
               <label class="bmd-label-floating">Fetured image</label>
               <input type="file" name="featured" class="form-control" id="fetured" required>
            </div>
            <div style="max-height: 200px; overflow-y: auto; overflow-x: hidden;">
               <div>Select tags</div>
               <div class="row" style="margin-left: -10px; margin-right: -10px;">
                  @foreach ($tags as $tag)
                     <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="padding: 10px">
                        <div class="bmd-from-group">
                           <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="check_{{$tag->id}}">
                           <label class="bmd-label-floating" for="check_{{$tag->id}}">{{$tag->tag}}</label>
                        </div>   
                     </div>  
                  @endforeach
               </div>
            </div>
            <div class="form-group bmd-from-group">
               <label for="content" class="bmd-label-floating">Content</label>
               <textarea name="content" cols="30" class="form-control" id="content" required></textarea>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary"><i class="material-icons">add</i> Create</button>
            </div>
         </form>
      </div>
   </div>
@endsection