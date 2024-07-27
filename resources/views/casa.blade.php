@section('meta_keywords',)
@section('meta_description', )


<x-layout>
  <x-slot name="title">Casa</x-slot>
                  <!-- Hero Start -->
                  <div class="container-fluid bg-light py-6 my-6 mt-0">
                    <div class="container text-center animate__animated animate__bounceInDown">
                        <h1 class="display-1 mb-4">Casa</h1>
                        <ol class="breadcrumb justify-content-center mb-0 animate__animated animate__bounceInDown">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item text-dark" aria-current="page">Casa</li>
                        </ol>
                    </div>
                </div>
                <!-- Hero End -->
        <!-- About Satrt -->
        <div class="container-fluid py-6">
          <div class="container">
              <div class="row g-5 align-items-center">
                  <div class="col-lg-5 wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
                      <img src="img/about.jpg" class="img-fluid rounded" alt="">
                  </div>
                  <div class="col-lg-7 wow animate__animated animate__bounceInUp" data-wow-delay="0.3s">
                      <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">About Us</small>
                      <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
                      <p class="mb-4">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore eit esdioilore magna aliqua. Ut enim ad minim veniam, 
                          quis nostrud exercitation ullaemco laboeeiris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                          dolor iesdein reprehendeerit in voluptate velit esse cillum dolore.</p>
                      <div class="row g-4 text-dark mb-5">
                          <div class="col-sm-6">
                              <i class="fas fa-share text-primary me-2"></i>Fresh and Fast food Delivery
                          </div>
                          <div class="col-sm-6">
                              <i class="fas fa-share text-primary me-2"></i>24/7 Customer Support
                          </div>
                          <div class="col-sm-6">
                              <i class="fas fa-share text-primary me-2"></i>Easy Customization Options
                          </div>
                          <div class="col-sm-6">
                              <i class="fas fa-share text-primary me-2"></i>Delicious Deals for Delicious Meals
                          </div>
                      </div>
                      <a href="" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->

      <!-- Events Start -->
<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
            <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">Tutte</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Camera</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Bagno</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark" style="width: 150px;">Cucina</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark" style="width: 150px;">Esterno</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/camera-1.jpg" data-lightbox="camera-1" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/camera-2.jpg" data-lightbox="camera-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-3.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/camera-3.jpg" data-lightbox="camera-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-5.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/event-5.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-6.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/event-6.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-7.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/event-7.jpg" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-8.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/event-8.jpg" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/01.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Wedding</h4>
                                            <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-3.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Corporate</h4>
                                            <a href="img/01.jpg" data-lightbox="event-11" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-5.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/01.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-6.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Cocktail</h4>
                                            <a href="img/01.jpg" data-lightbox="event-13" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-7.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/01.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-8.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/01.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->

<!-- Service Start -->
<div class="container-fluid service py-6">
    <div class="container">
        <div class="text-center wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
            <h1 class="display-5 mb-5">What We Offer</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-cheese fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Wedding Services</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__bounceInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Corporate Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__bounceInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-hotdog fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Cocktail Reception</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__bounceInUp" data-wow-delay="0.7s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Bento Catering</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-wine-glass-alt fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Pub Party</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 wow animate__animated animate__bounceInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fas fa-walking fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">Home Delivery</h4>
                            <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
    
    
            <!-- Testimonial Start -->
            <div class="container-fluid py-6">
                <div class="container">
                    <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonial</small>
                        <h1 class="display-5 mb-5">What Our Customers says!</h1>
                    </div>
                    <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="testimonial-item rounded bg-light">
                            <div class="d-flex mb-3">
                                <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                                <div class="position-absolute" style="top: 15px; right: 20px;">
                                    <i class="fa fa-quote-right fa-2x"></i>
                                </div>
                                <div class="ps-3 my-auto">
                                    <h4 class="mb-0">Person Name</h4>
                                    <p class="m-0">Profession</p>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                                <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
  </x-layout>