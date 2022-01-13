@extends('base')
@section('content')

      <!-- nav shop -->
      <nav id="shopNav" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="shop.html">GPSHOP</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navshop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navshop">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link js-scroll-trigger" href="#">Football</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">Basketball</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">Tennis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">Golf</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">Boxing</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">Running</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="store.html"><span class="ourstore">Our Store</span></a>
              </li>
            </ul> 
            </ul>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark btn-sm" type="submit"><i class="bi bi-search"></i></button>
              </form>
          </div>
        </div>
        </div>
      </nav>
      <br> <br>
      <!-- nav shop -->

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

    <!-- shop by category  -->
    <div class="sc container">
        <div class="col">
            <h2 class="text-start fs-3">Shop by Category</h2>
        </div>

        <!--image row start-->
        <div class="sc1 row">

          <div class="image align">
            <img src="img/men.png" alt="">
            <div class="details">
              <h2>MEN</h2>
              <a href="#" class="btn btn-dark btn-m">EXPLORE</a>
            </div>
          </div>

          <div class="image">
            <img src="img/woman.png" alt="">
            <div class="details">
              <h2>WOMAN</h2>
              <a href="#" class="btn btn-dark btn-m">EXPLORE</a>
            </div>
          </div>

          <div class="image">
            <img src="img/kids.png" alt="">
            <div class="details">
              <h2>KIDS</h2>
              <a href="#" class="btn btn-dark btn-m">EXPLORE</a>
            </div>
          </div>

          <div class="image">
            <img src="img/aksesoris.png" alt="">
            <div class="details">
              <h2>ACCESSORIES</h2>
              <a href="#" class="btn btn-dark btn-m">EXPLORE</a>
            </div>
          </div>

        </div>
        <!--image row end-->
      </div>
      <!-- shop by category -->

     <!-- best seller -->
     <div class="bs container mb-5 mt-3">
        <div class="col">
            <h2 class="text-start fs-3">Best Seller</h2>
        </div>
        <!-- row1 -->
        <div class="bs1 row">

                <div class="card1 mt-5 align-items-center p-2 text-center">
                        <img src="img/store/tas.png" alt="" class="rounded img-fluid" width="160">
                        <h5>Bag</h5>
                        <div class="card-body">
                            <span class="text1 d-block">Lorem, ipsum dolor</span>
                            <div class="cost mt-3 text-dark">
                                <span>$59.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="star bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="p-3 cart text-center text-white mt-3 cursor">
                                    <a class="cart3 stretched-link" href="https://wa.me/087887348391"><span class="text-uppercase text-light">add to cart</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <div class="card1 mt-5 align-items-center p-2 text-center">
                        <img src="img/store/bajuvoli.png" alt="" class="rounded img-fluid" width="160">
                        <h5>Volley Jersey</h5>
                        <div class="card-body">
                            <span class="text1 d-block">Lorem, ipsum dolor</span>
                            <div class="cost mt-3 text-dark">
                                <span>$50.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="star bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="p-3 cart text-center text-white mt-3 cursor">
                                    <a class="cart3 stretched-link" href="https://wa.me/087887348391"><span class="text-uppercase text-light">add to cart</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="card1 mt-5 align-items-center p-2 text-center">
                        <img src="img/store/tumblr.png" alt="" class="rounded img-fluid" width="160">
                        <h5>Blue Tumblr</h5>
                        <div class="card-body">
                            <span class="text1 d-block">Lorem, ipsum dolor</span>
                            <div class="cost mt-3 text-dark">
                                <span>$49.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="star bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="p-3 cart text-center text-white mt-3 cursor">
                                    <a class="cart3 stretched-link" href="https://wa.me/087887348391"><span class="text-uppercase text-light">add to cart</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="card1 mt-5 align-items-center p-2 text-center">
                        <img src="img/store/topi.png" alt="" class="rounded img-fluid" width="160">
                        <h5>Hat Sports</h5>
                        <div class="card-body">
                            <span class="text1 d-block">Lorem, ipsum dolor</span>
                            <div class="cost mt-3 text-dark">
                                <span>$49.99</span>
                                <div class="star mt-3 align-items-center">
                                    <i class="star bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="p-3 cart text-center text-white mt-3 cursor">
                                    <a class="cart3 stretched-link" href="https://wa.me/087887348391"><span class="text-uppercase text-light">add to cart</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        <!-- row1 -->
        </div>
        <!-- best seller -->

    <!-- brand -->
    <div class="br container">
        <div class="col">
            <h2 class="text-start fs-3">Brand</h2>
        </div>

        <!-- row 1-->
        <div class="row">
            <!-- content -->
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
        </div>
            
    <!-- end row1 -->
        <!-- row 1-->
        <div class="row">
            <!-- content -->
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
                <div class="card2 ">
                    <div class="product-1 align-items-center p-2 text-center">
                        <img src="img/brand1.webp" alt="" class="rounded img-fluid" width="160">
                        <a class="cart3 stretched-link" href="#"></a>
                    </div>
                </div>
        </div>
            
    <!-- end row1 -->

        </div>
    <!-- brand -->

    <div class="vos text-center mb-5">
        <a class="btn btn-outline-dark" href="store.html">VISIT OUR STORE</a>
    </div>

    @endsection