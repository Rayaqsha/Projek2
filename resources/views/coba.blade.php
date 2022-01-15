@extends('base')
@section('content')

    <!-- our fields  -->
    <div class="sc container mt-5">
        <div class="col">
            <h2 class="text-center fs-2">Our Fields</h2>
        </div>

        <!--image row start-->
        <div class="row mt-4 mb-4">
        <div class="col-md-3">

            <div class="card">
            <?php $image="img/lapangan/tennis.jpg"?>
            <?php echo "<img src ='".$image."'>";?>
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
    </div>
      <!-- our fields -->

    @endsection