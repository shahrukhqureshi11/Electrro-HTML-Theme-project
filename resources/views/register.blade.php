
@extends('layouts.app')

@section('main')


       <a href="/">Go to Login</a>
       <h1 class="text-center">Registration page</h1>
            @if (session('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>{{ session('success') }}</strong>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
@endif

          <form method="POST" action="{{route('abc')}}">
@csrf
    <div>
    <div class="mb-3">
         <label for="firstname" class="form-label">First Name</label>
         <input name="firstname" type="text" class="form-control" id="firstname">
    </div>
    <div class="mb-3">
         <label for="lastname" class="form-label">Last Name</label>
         <input name="lastname" type="text" class="form-control" id="lastname">
    </div>
    <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
         <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
         <label for="password" class="form-label">Password</label>
         <input name="password" type="password" class="form-control" id="password">
    </div>
    <div class="mb-3">
         <label for="cpassword" class="form-label">CPassword</label>
         <input name="cpassword" type="password" class="form-control" id="cpassword">
    </div>
         <button type="submit"class="btn btn-primary">Submit</button>
    </form>
@endsection
