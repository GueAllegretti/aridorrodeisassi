@section('meta_keywords',)
@section('meta_description', )


<x-layout>
  <x-slot name="title">Struttura</x-slot>

<div class="bg-breadcrumb d-flex align-items-center page-header py-5">
    <div class="container position-relative d-flex flex-column align-items-center pt-5 pb-2" data-aos="fade">
      <h2 class="mt-5 display-4">Struttura</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item text-dark fw-bold fst-italic active" aria-current="page">Struttura</li>
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
                        <img src="img/camera-1.webp" class="img-fluid rounded image-casa-page" alt="">
                        <div class="image-overlay"></div>
                        <div class="fade-circle-casa d-none d-sm-block"></div>
                        <div class="small-circle-casa"></div>
                    </div>
                </div>
                  <div class="col-lg-7">
                      <h1 class="display-5 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">A Ridosso dei Sassi</h1>
                      <h6 class="mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">Un Rifugio incantevole tra Storia e Comfort</h6>
                      <p class="mb-4">
                        Situata nel cuore di un paesaggio unico, la nostra dimora è il rifugio ideale per chi vuole soggiornare a due passi Sassi.
            
                        All'interno, troverete una spaziosa cucina completamente attrezzata, due bagni, dotati di ogni comfort per garantire il massimo del relax durante il vostro soggiorno.
                        <br><br>
                        Le due camere da letto, arredate con gusto e attenzione ai dettagli, offrono spazi accoglienti e rilassanti, dove potrete riposare serenamente dopo una giornata di esplorazioni. La posizione privilegiata della casa, "A ridosso dei sassi", permette di immergersi nella storia e nella cultura locali, con facile accesso alle meraviglie del territorio circostante.
                        <br><br>
                        Scegliendo "A Ridosso dei Sassi," sceglierete un'esperienza indimenticabile, dove il fascino del passato incontra il comfort del presente. Vi aspettiamo per accogliervi con calore e farvi sentire come a casa vostra.</p>
                      {{-- <div class="row g-4 text-dark mb-5 d-none d-sm-block">
                          <div class="col-sm-6"><p>
                              <i class="fa-solid fa-house me-2"></i>60 m² superficie</p>
                          </div>
                          <div class="col-sm-6"><p>
                            <i class="fa-solid fa-house me-2"></i>Intera casa</p>
                          </div>
                          <div class="col-sm-6"><p>
                            <i class="fa-solid fa-eye me-2"></i>Vista</p>
                          </div>
                          <div class="col-sm-6"><p>
                            <i class="fa-solid fa-ban-smoking me-2"></i>Camere non fumatori</p>
                          </div>
                          <div class="col-sm-6"><p>
                            <i class="fa-brands fa-product-hunt me-2"></i>Parcheggio gratuito</p>
                          </div>
                          <div class="col-sm-6"><p>
                            <i class="fa-solid fa-mug-hot me-2"></i>Colazione</p>
                          </div>
                      </div> --}}
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
                            <i class="fa-brands fa-product-hunt fa-3x mb-4"></i>
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
            <div class="col-lg-2 col-md-6 col-sm-12">
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

      <!-- foto Start -->
<div class="container casa py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="display-5 mb-5">La struttura</h1>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark text-foto" style="width: 150px;">Camere</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark text-foto" style="width: 150px;">Bagni</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                        <span class="text-dark text-foto" style="width: 150px;">Cucina</span>
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                        <span class="text-dark text-foto" style="width: 150px;">Esterno</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-2" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                @foreach($fotoCamere as $fotoCamera)
      
                                <x-cardFotoCamere
                                  id="{{$fotoCamera['id']}}"
                                  alt="{{$fotoCamera['alt']}}"
                                  img="{{$fotoCamera['img']}}"
                                />
                                @endforeach
                                {{-- <div class="col-md-4 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-2.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/camera-2.webp" data-lightbox="camera-2" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-3.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/camera-3.webp" data-lightbox="camera-3" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/camera-4.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/camera-4.webp" data-lightbox="camera-4" class="my-auto"></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/bagno-1.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/bagno-1.webp" data-lightbox="bagno-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/bagno-2.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/bagno-2.webp" data-lightbox="bagno-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/bagno-3.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/bagno-3.webp" data-lightbox="bagno-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
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
                                @foreach($fotoCucina as $fotoCucina)
      
                                <x-cardFotoCucina
                                  id="{{$fotoCucina['id']}}"
                                  alt="{{$fotoCucina['alt']}}"
                                  img="{{$fotoCucina['img']}}"
                                />
                                @endforeach
                                {{-- <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/cucina-2.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <a href="img/cucina-2.webp" data-lightbox="cucina-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/esterno-1.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/esterno-1.webp" data-lightbox="esterno-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/esterno-2.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/esterno-2.webp" data-lightbox="esterno-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="casa-img position-relative">
                                        <img class="img-fluid rounded w-100" src="img/esterno-3.webp" alt="">
                                        <div class="casa-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">Buffet</h4>
                                            <a href="img/esterno-3.webp" data-lightbox="esterno-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
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
<!-- foto End -->

  </x-layout>