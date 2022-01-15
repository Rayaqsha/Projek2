@extends('base')
@section('content')

    <!-- slider -->
    <div class="overlay"></div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/lapangan/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Online Reservation Booking</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button class="btnslider btn btn-lg btn-dark mt-1 stretched-link rounded-pill" type="submit">Booking Now</button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/lapangan/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Online Reservation Booking</h5>
                <p>Some representative placeholder content for the second slide.</p>
                <button class="btnslider btn btn-lg btn-dark mt-1 stretched-link rounded-pill" type="submit">Booking Now</button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/lapangan/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Online Reservation Booking</h5>
                <p>Some representative placeholder content for the third slide.</p>
                <button class="btnslider btn btn-lg btn-dark mt-1 stretched-link rounded-pill" type="submit">Booking Now</button>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
      <!-- end slider -->

    <!-- table -->
    <div class="schedule container mb-5 mt-3">
        <div class="col">
            <h2 class="tible text-center fs-2 text-light">Schedule Table</h2>

            <div class="d-flex col justify-content-center">

            <select class="form-control1 col-2" id="fields" required>
            <option selected disabled value="">Fields:</option>
            <option>Tennis</option>
            <option>Football</option>
            <option>Golf</option>
            <option>Basketball</option>
            </select>

            <input type="date" name="date" class="form-control1 col-2 ml-3" id="date" placeholder="Date">
            </div>
        </div>
        <!-- table -->
        <table class="table table-dark table-striped table-hover mt-4">
            <thead>
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                        <td>27/07/2022</td>
                        <td>09:00</td>
                        <td>Abraham Lincoln</td>
                        <td>abraham@anjay.com</td>

                </tr>
            </tbody>
            </table>

        <!-- table -->
        </div>
        <!-- schedule -->

    <!-- our fields  -->
    <div class="sc container mt-5">
        <div class="col">
            <h2 class="text-center fs-2">Our Fields</h2>
        </div>

        <!--image row start-->
        <div class="row mt-4 mb-4">
        <div class="col-md-3">
            <div class="card">
            <img src="img/lapangan/tennis.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tennis Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/bookingtennis" type="submit">Booking</a>
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
        <!--image row end-->
      </div>
    </div>
      <!-- our fields -->

    <!-- brand -->
    <div class="containerform">
      <div class="row mt-5 mb-5">
          <div class="aboutus col">
              <h3 class="card-title text-light">About Us</h3>
              <p class="card-text text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias sit optio ipsum fugiat eum incidunt impedit, sed voluptates consequuntur necessitatibus quasi magni minima dolorem expedita nobis ad quis vel!</p>
              <a class="w-30 btn btn-md btn-outline-light mt-1 rounded-pill" href="/booking" type="submit">Contact us</a>
          </div>

            <div class="col">
                <section class = "main-container-right">
                <h2>Read some news</h2>
                
                <article>
                    <h4>just in </h4>
                    <div>
                        <h2>Here's how to track your stimulus check with the IRS Get My Payment Portal</h2>
                        <a class="stretched-link" href = "/news">Read More <span>>></span></a>
                    </div>
                    <img src = "img/news2.jpg">
                </article>

                <article>
                    <h4>just in </h4>
                    <div>
                        <h2>The best outdoor games to play with your family</h2>
                        <a class="stretched-link" href = "/news">Read More <span>>></span></a>
                    </div>
                    <img src = "img/news3.png">
                </article>
            </section>
            </div>
        </div>
    <!-- brand -->
    @endsection