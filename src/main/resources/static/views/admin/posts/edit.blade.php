@extends('layouts.admin')

@section('content')
   <div class="card">
      <div class="card-header card-header-primary">
      <h4 class="card-title">Edit Post: {{$post->title}}</h4>
      </div>
      <div class="card-body">
         <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group bmd-form-group">
               <label for="title" class="bmd-label-floating">Title</label>
               <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}" required>
            </div>
            <div class="form-group bmd-from-group">
               <label for="category_id" class="bmd-label-floating">Category</label>
               <select name="category_id" id="category_id" class="form-control">
                  @foreach ($categories as $category)
                     <option value="{{ $category->id }}"
                        @if ($post->category_id == $category->id)
                           selected
                        @endif
                     >{{ $category->name }}</option>
                  @endforeach
               </select>
            </div>
            <div class="bmd-from-group">
               <label class="bmd-label-floating">Fetured image</label>
               <input type="file" name="featured" class="form-control" id="fetured" value="{{$post->featured}}">
            </div>
            <div style="max-height: 200px; overflow-y: auto; overflow-x: hidden;">
               <div>Tags</div>
               <div class="row" style="margin-left: -10px; margin-right: -10px;">
                  @foreach ($tags as $tag)
                     <div class="col-6 col-sm-4 col-md-3 col-lg-2" style="padding: 10px">
                        <div class="bmd-from-group">
                           <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="check_{{$tag->id}}" 
                              @foreach ($post->tags as $t)
                                 @if ($tag->id == $t->id)
                                    checked
                                 @endif
                              @endforeach
                           >
                           <label class="bmd-label-floating" for="check_{{$tag->id}}">{{$tag->tag}}</label>
                        </div>   
                     </div>  
                  @endforeach
               </div>
            </div>
            <div class="form-group bmd-from-group">
               <label for="content" class="bmd-label-floating">Content</label>
               <textarea name="content" cols="30" class="form-control" id="content" required>{{$post->content}}</textarea>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary"><i class="material-icons">add</i> Update</button>
            </div>
         </form>
      </div>
   </div>
@endsection