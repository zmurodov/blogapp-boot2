@extends('layouts.admin')

@section('content')
   <div class="card">
      <div class="card-header card-header-primary">
         <h4 class="card-title">All Trashed Posts <span class="badge badge-warning">{{$posts->count()}}</span></h4>
      </div>
      <div class="card-body py-1 px-1">
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Image</th>
                     <th>Title</th>
                     <th>Category</th>
                     <th>Content</th>
                     <th class="text-center text-success">Edit</th>
                     <th class="text-center text-success">Restore</th>
                     <th class="text-center text-warning">Delete</th>
                  </tr>
               </thead>
               <tbody>
                  @if ($posts->count() > 0)
                      
                     @foreach ($posts as $index => $post)
                        <tr>
                           <td>{{$index+1}}</td>
                           <td><img src="{{ $post->featured }}" alt="{{$post->title}}" height="50px"></td>
                           <td>{{$post->title}}</td>
                           <td>{{$post->category->name}}</td>
                           <td>{{$post->content}}</td>
                           <td class="text-center">
                              <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="text-success"  data-toggle="tooltip" title="Edit Post">
                                 <i class="material-icons">create</i> edit
                              </a>
                           </td>
                           <td class="text-center">
                              <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="text-warning"  data-toggle="tooltip" title="Delete post">
                                 <i class="material-icons">refresh</i> restore
                              </a>
                           </td>
                           <td class="text-center">
                              <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="text-warning"  data-toggle="tooltip" title="Delete post">
                                 <i class="material-icons">clear</i> delete
                              </a>
                           </td>
                        </tr>
                     @endforeach
                  @else
                     <tr>
                        <td colspan="7" class="text-center">No trashed posts</td>
                     </tr>
                  @endif
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection