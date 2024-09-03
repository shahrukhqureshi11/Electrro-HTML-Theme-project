@extends('layouts.app')
@section('main')
<a href="/register">Go to register</a>
        <h1 class="text-center">login From </h1>
        @if ($errors->any())
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>
      <ul style= "list-style:none">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            
          </ul>
          <!--  <strong>{{ session('error') }}</strong>--->
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
@endif
    <form method="post" action="/login">
          @csrf
          @method('post')
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input name="email" value="" type="email" class="form-control" id="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password">
            </div>
            <button type="submit"class="btn btn-dark">Submit</button>
          </form>
 
@endsection  

  
    