@section('meta_keywords',)
@section('meta_description', )


<x-layout>
  <x-slot name="title">Strutura</x-slot>

        <div class="container-fluid bg-breadcrumb page-header py-5">
            <div class="container pt-5 pb-2">
                <h1 class="display-3 text-dark mb-2 mt-4">Struttura</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-dark active" aria-current="page">Struttura</li>
                    </ol>
                </nav>
            </div>
        </div>


        <!-- About Satrt -->
        <div class="container py-5">
          <div class="container py-5">
              <div class="row g-5 align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="image-container-casa image-casa">
                        <img src="img/camera-1.jpg" class="img-fluid rounded image-casa-page" alt="">
                        <div class="image-overlay"></div>
                        <div class="fade-circle-casa"></div>
                        <div class="small-circle-casa"></div>
                    </div>
                </div>
                  <div class="col-lg-7">
                      <h1 class="display-5 mb-4">Trusted By 200 + satisfied clients</h1>
                      <p class="mb-4">A due passi dai Sassi di Matera la Casa Vacanze "A Ridosso dei Sassi" offre un confortevole alloggio famigliare a piano terra con ingresso indipendente e con ampio parcheggio gratuito disponibile.
                        <br>Sono presenti due camere da letto, zona living e 2 bagni.</p>
                      <div class="row g-4 text-dark mb-5">
                          <div class="col-sm-6">
                              <i class="fa-solid fa-house me-2"></i>60 m² superficie
                          </div>
                          <div class="col-sm-6">
                            <i class="fa-solid fa-house me-2"></i>Intera casa
                          </div>
                          <div class="col-sm-6">
                            <i class="fa-solid fa-eye me-2"></i>Vista
                          </div>
                          <div class="col-sm-6">
                            <i class="fa-solid fa-ban-smoking me-2"></i>Camere non fumatori
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->

<!-- Service Start -->
<div class="container service py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="display-5 mb-5">Servizi</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fa-solid fa-p fa-3x mb-4"></i>
                            <p class="mb-4">Parcheggio gratuito</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fa-solid fa-mug-hot fa-3x mb-4"></i>
                            <p class="mb-4">Colazione</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12" data-wow-delay="0.5s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fa-solid fa-wheelchair fa-3x mb-4"></i>
                            <p class="mb-4">Camere/strutture per ospiti disabili</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fa-solid fa-users fa-3x mb-4"></i>
                            <p class="mb-4">Disponibilità di camere familiari</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fa-solid fa-van-shuttle fa-3x mb-4"></i>
                            <p class="mb-4">Navetta aeroportuale</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="fa-solid fa-paw fa-3x mb-4"></i>
                            <p class="mb-4">Animali ammessi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

      <!-- Events Start -->
<div class="container event py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="display-5 mb-5">La struttura</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">Tutte</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Camere</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Bagni</span>
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
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/camera-1.jpg" data-lightbox="camera-1" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Camere</h4>
                                            <a href="img/camera-2.jpg" data-lightbox="camera-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-3.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Camere</h4>
                                            <a href="img/camera-3.jpg" data-lightbox="camera-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/esterno-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Esterno</h4>
                                            <a href="img/esterno-1.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/esterno-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/esterno-2.jpg" data-lightbox="esterno-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/esterno-3.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/esterno-3.jpg" data-lightbox="esterno-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3" data-wow-delay="0.5s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/cucina-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/cucina-1.jpg" data-lightbox="cucina-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/cucina-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/cucina-2.jpg" data-lightbox="cucina-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/cucina-3.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/cucina-3.jpg" data-lightbox="cucina-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
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
                                <div class="col-md-4 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/camera-1.jpg" data-lightbox="camera-1" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/camera-2.jpg" data-lightbox="camera-2" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-3.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/camera-3.jpg" data-lightbox="camera-3" class="my-auto"></a>
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
                                            <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
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
                                        <img class="img-fluid rounded w-100" src="img/cucina-1.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/cucina-1.jpg" data-lightbox="cucina-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/cucina-2.jpg" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <a href="img/cucina-2.jpg" data-lightbox="cucina-2S" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
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

  </x-layout>