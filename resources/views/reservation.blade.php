@extends('base')
@section('content')

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Online Reservation Booking</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button class="w-30 btn btn-lg btn-dark mt-1 stretched-link" type="submit">Booking Now</button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                <button class="w-30 btn btn-lg btn-dark mt-1 stretched-link" type="submit">Booking Now</button>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                <button class="w-30 btn btn-lg btn-dark mt-1 stretched-link" type="submit">Booking Now</button>
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
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/booking" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="img/lapangan/football.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Football Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/booking" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="img/lapangan/golf.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Golf Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/booking" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="img/lapangan/basket.jpg" class="card-img-top w-80" alt="...">
            <div class="card-body">
                <h5 class="card-title">Basketball Fields</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a class="w-30 btn btn-md btn-outline-danger mt-1 stretched-link" href="/booking" type="submit">Booking</a>
            </div>
            </div>
        </div>
        <!--image row end-->
      </div>
      <!-- our fields -->

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
        <!-- row1 -->
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

        <!-- row1 -->
        </div>
        <!-- best seller -->

    <!-- brand -->
    <div class="br container">
        <div class="col">
            <h2 class="text-start fs-3">What you gonna say</h2>
        </div>

        <form>
        <div class="mb-3">
            <label for="Comment" class="form-label">what you gonna say</label>
            <input type="text" class="form-control" id="comment">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    <!-- brand -->

    <div class="vos text-center mb-5">
        <a class="btn btn-outline-dark" href="/store">VISIT OUR STORE</a>
    </div>

    @endsection