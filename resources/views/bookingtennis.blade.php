@extends('base')
@section('content')

      <h1 class="mt-4 mb-4">What Da {{ Session::get('name') }} Doin?!</h1>
      

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

      
      <!-- fields form  -->

      <div class="containerform">
      <div class="row mt-5 mb-5">
            <div class="col">
            <img src="img/lapangan/tennis.jpg" class="w-100" alt="">
            </div>
            <div class="col">
                <div class="cardbook">
                <div class="card-body">
                <div class="container">

                    <form action="#">
                    <h2 class="mb-3">Reservation Online</h2>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                        <label for="floatingInput">Your Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <!-- <div class="form-field">
                        <select class="form-select" id="field" required>
                        <option selected disabled value="">Choose your fields</option>
                        <option>Tennis</option>
                        <option>Football</option>
                        <option>Basket</option>
                        <option>Golf</option>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                    </div> -->
                    <div class="form-floating">
                        <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                        <label for="floatingInput">Date</label>
                    </div>
                    
                    <div class="form-field">
                        <select class="form-select" id="time" required>
                        <option selected disabled value="">Choose your time:</option>
                        <option>08:00</option>
                        <option>09:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>12:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                        <option>17:00</option>
                        <option>18:00</option>
                        <option>19:00</option>
                        <option>20:00</option>
                        <option>21:00</option>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                    </div>
                    <!-- <div class="form-field">
                    <p>How many people?</p>
                    <select name="select" id="#">
                    <option value="1">1 person</option>
                    <option value="2">2 persons</option>
                    <option value="3">3 persosn</option>
                    <option value="4">4 persons</option>
                    <option value="5">5 persons</option>
                    <option value="5+">5+ persons</option>
                    </select>
                    </div> -->

                    <button class="w-100 btn btn-lg btn-danger mt-4" type="submit">Booking</button>
                    </form>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
            
      <!-- fields form -->
      
      <!-- slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/poster1.webp" class="d-block w-100" alt="...">
              <a class="stretched-link" href="store.html"></a>
            </div>
            
            <div class="carousel-item">
              <img src="img/poster2.webp" class="d-block w-100" alt="...">
              <a class="stretched-link" href="store.html"></a>
            </div>
  
            <div class="carousel-item">
              <img src="img/poster3.webp" class="d-block w-100" alt="...">
              <a class="stretched-link" href="store.html"></a>
            </div>
  
          </div>
        </div>
        <!-- end slider -->

     <!-- booked again -->
     <div class="bs container mb-5 mt-3">
        <div class="col">
            <h2 class="text-center mb-3">More Fields</h2>
        </div>
        <!-- row1 -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <div class="col">
            <div class="card">
            <img src="img/lapangan/basket.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Basketball Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/bookingbasket" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="img/lapangan/football.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Football Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/bookingfootball" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="img/lapangan/golf.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Golf Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/bookinggolf" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <!-- booked again -->

        </div>

    @endsection