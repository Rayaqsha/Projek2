@extends('base')
@section('content')

<style>
body {
    padding: 0;
    margin: 0;
    background-image: url(img/bg2.jpg);
    background-size: cover;
    font-family: 'Montserrat', sans-serif;
}
</style>

<div class="container">
<div class="row justify-content-center mt-5 ">
<div class="col-5 card1">
  <div class="card-body">
    <main class="form-login">
          <form>
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control rounded-top" id="floatingInput" placeholder="Enter your email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Enter your password">
                <label for="floatingPassword">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
          </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
  </div>
</div>
</div>
</div>
<!-- <div class="row justify-content-center mt-5 ">
    <div class="col-lg-4">
        <main class="form-login">
          <form>
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control rounded-top" id="floatingInput" placeholder="Enter your email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Enter your password">
                <label for="floatingPassword">Password</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
          </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div> -->

@endsection