@extends('base')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
        <main class="form-registration">
          <form action="/register" method="POST">
             @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Registration form</h1>
        
            <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" name="confirmation_password" class="form-control rounded-bottom" id="confirmation_password" placeholder="Confirmation password">
                <label for="floatingInput">Confirmation password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
          </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection