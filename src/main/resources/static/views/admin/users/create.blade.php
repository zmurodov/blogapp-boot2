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
         Create a new user
      </div>
      <div class="card-body">
      <form action="{{ route('user.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
               <label for="name_id" class="bmd-label-floating">Name</label>
               <input type="text" name="name" class="form-control" id="name_id" required>
            </div>
            <div class="form-group">
               <label for="email_id" class="bmd-label-floating">Email</label>
               <input type="email" name="email" class="form-control" id="email_id" required>
            </div>
            <div class="form-group">
               <label for="password_id" class="bmd-label-floating">Password</label>
               <input type="password" name="password" class="form-control" id="password_id" required>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block">Create user</button>
            </div>
         </form>
      </div>
   </div>
@endsection