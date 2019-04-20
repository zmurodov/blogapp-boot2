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
         <h4 class="card-title ">All tags <span class="badge badge-warning">{{$tags->count()}}</span></h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="text-primary">
               <tr>
                  <th>#</th>
                  <th>Tag</th>
                  <th class="text-center">Edit</th>
                  <th class="text-center">Delete</th>
               </tr>
            </thead>
            <tbody>
               @if ($tags->count() > 0)
                  @foreach ($tags as $index => $tag)
                     <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$tag->tag}}</td>
                        <td class="text-center">
                           <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="text-primary"  title="Edit tag">
                              <i class="material-icons">create</i> edit
                           </a>
                        </td>
                        <td class="text-center">
                           <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="text-warning" title="Delete tag">
                              <i class="material-icons">clear</i> delete
                           </a>
                        </td>
                     </tr>
                  @endforeach
               @else
                  <tr>
                     <td colspan="4" class="text-center">No tags</td>
                  </tr>
               @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection