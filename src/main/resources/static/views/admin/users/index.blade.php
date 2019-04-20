@extends('layouts.admin')

@section('content')
   <div class="card">
      <div class="card-header card-header-primary">
      <h4 class="card-title">All Users <span class="badge badge-warning">{{$users->count()}}</span></h4>
      </div>
      <div class="card-body py-1 px-1">
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Image</th>
                     <th>Name</th>
                     <th>Is admin</th>
                     <th class="text-center text-warning">Delete</th>
                  </tr>
               </thead>
               <tbody>
                  @if ($users->count() > 0)
                     @foreach ($users as $index => $user)
                        <tr>
                           <td>{{$index+1}}</td>
                           <td><img src="{{ asset($user->profile->avatar) }}" alt="{{$user->name}}" height="50px" style="border-radius: 50%;"></td>
                           <td>
                              @if ($user->admin)
                                 <i class="material-icons text-primary">star</i>
                              @endif
                              {{$user->name}}
                           </td>
                           <td>
                              @if ($user->admin)
                                 <a href="{{route('user.removeadmin', ['id' => $user->id])}}" class="text-warning"><i class="material-icons">remove</i> remove admin</a>
                              @else
                                 <a href="{{route('user.addadmin', ['id' => $user->id])}}" class="text-success"><i class="material-icons">add</i> add admin</a>
                              @endif
                           </td>
                           <td class="text-center">
                              <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="text-warning"  data-toggle="tooltip" title="Delete post">
                                 <i class="material-icons">clear</i> trash
                              </a>
                           </td>
                        </tr>
                     @endforeach
                  @else
                     <tr>
                        <td colspan="6" class="text-center">No published posts!</td>
                     </tr>
                  @endif
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection