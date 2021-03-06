@extends('base')
@section('content')
 
 <!-- nav shop -->
 <nav id="shopNav" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/shop">GPSHOP</a>
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
                <a class="nav-link js-scroll-trigger" href="/store"><span class="ourstore">Our Store</span></a>
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
      <!-- nav shop -->

      <!-- nav store -->
      <nav id="storeNav" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navstore" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navstore">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Men</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Woman</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Unisex</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sort By
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Highest Price</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Lowest Price</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Newest Product</a></li>
                    </ul>
                  </li>
            </ul> 
            </ul>
          </div>
        </div>
        </div>
      </nav>
      <!-- nav store -->

        <!-- content -->
        <div class="container mb-5 mt-3">

            <!-- row1 -->
            <div class="row">

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
                            <img src="img/store/barble.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Barble</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$34.99</span>
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
                            <img src="img/store/basketball.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Basket Ball</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$79.99</span>
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
        
            <!-- row2 -->
            <div class="row">

                    <div class="card1 mt-5 align-items-center p-2 text-center">
                            <img src="img/store/celana.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Training Pants</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$64.99</span>
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
                            <img src="img/store/jerseyfutsal.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Football Jersey</h5>
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
                            <img src="img/store/jumprope.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Jump Rope</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$29.99</span>
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
                            <img src="img/store/raket.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Tennis Racket</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$249.99</span>
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
    
            <!-- row2 -->

            <!-- row3 -->
            <div class="row">

                    <div class="card1 mt-5 align-items-center p-2 text-center">
                            <img src="img/store/rugby ball.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Rugby Ball</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$89.99</span>
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
                            <img src="img/store/sarungtinju.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Boxing Glove</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$99.99</span>
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
                            <img src="img/store/sepatu.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Running Shoes</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$89.99</span>
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

                    </div>
            <!-- row3 -->

            <!-- row4 -->
            <div class="row">

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
                        
                    <div class="card1 mt-5 align-items-center p-2 text-center">
                            <img src="img/store/badminton.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Yonex Racket</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$199.99</span>
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
                            <img src="img/store/baseball bat.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Baseball Stick</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$159.99</span>
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
                            <img src="img/store/golf bat.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Golf Stick</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$259.99</span>
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
            <!-- row4 -->

            <!-- row5 -->
            <div class="row">

                    <div class="card1 mt-5 align-items-center p-2 text-center">
                            <img src="img/store/shoes2.png" alt="" class="rounded img-fluid" width="160">
                            <h5>White Shoes</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$149.99</span>
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
                            <img src="img/store/tennis ball.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Tennis Ball</h5>
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
                            <img src="img/store/tumblr2.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Red Tumblr</h5>
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
                            <img src="img/store/volleyball.png" alt="" class="rounded img-fluid" width="160">
                            <h5>Volley Ball</h5>
                            <div class="card-body">
                                <span class="text1 d-block">Lorem, ipsum dolor</span>
                                <div class="cost mt-3 text-dark">
                                    <span>$89.99</span>
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
            <!-- row5 -->

        </div>
        <!-- content -->

      
    <div class="viewall text-center mt-5 mb-5">
        <a class="btn btn-outline-dark" href="/store">VIEW ALL</a>
    </div>

    @endsection