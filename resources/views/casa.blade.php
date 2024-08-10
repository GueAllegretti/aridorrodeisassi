@section('meta_keywords', 'casa vacanza, intero appartamento, sassi di matera, parcheggio gratuito, piano terra')
@section('meta_description', 'Casa vacanza nel cuore dei Sassi di Matera, inteno appartemento a piano terra con parcheggio gratuito' )


<x-layout>
    <x-slot name="title">{{__('generico.struttura')}}</x-slot>
    
    <div class="bg-breadcrumb d-flex align-items-center page-header py-5">
        <div class="container position-relative d-flex flex-column align-items-center pt-5 pb-2" data-aos="fade">
            <h2 class="mt-5 display-4">{{__('generico.struttura')}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item text-dark fw-bold active" aria-current="page">{{__('generico.struttura')}}</li>
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
                    <h6 class="mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">{{__('struttura.titolo')}}</h6>
                    <p class="mb-4">
                        {{__('struttura.descrizione_1')}}
                        <br><br>
                        {{__('struttura.descrizione_2')}}
                        <br><br>
                        {{__('struttura.descrizione_3')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <p class="mb-4">
                    {{__('struttura.descrizione_4')}}
                    <br><br>
                    {{__('struttura.descrizione_5')}}
                </div>
            </div>
        </div>
        <!-- About End -->
        
        <!-- Service Start -->
        <div class="container service py-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="display-5 mb-5">{{__('struttura.servizi')}}</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fa-brands fa-product-hunt fa-3x mb-4"></i>
                                    <p class="mb-4">{{__('struttura.servizi_1')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fa-solid fa-mug-hot fa-3x mb-4"></i>
                                    <p class="mb-4">{{__('struttura.servizi_2')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fa-solid fa-wheelchair fa-3x mb-4"></i>
                                    <p class="mb-4">{{__('struttura.servizi_3')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fa-solid fa-users fa-3x mb-4"></i>
                                    <p class="mb-4">{{__('struttura.servizi_4')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fa-solid fa-van-shuttle fa-3x mb-4"></i>
                                    <p class="mb-4">{{__('struttura.servizi_5')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fa-solid fa-eye fa-3x mb-4"></i>
                                    <p class="mb-4">{{__('struttura.servizi_6')}}</p>
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
                    <h1 class="display-5 mb-5">{{__('home.struttura')}}</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark text-foto" style="width: 150px;">{{__('struttura.camere')}}</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark text-foto" style="width: 150px;">{{__('struttura.cucina')}}</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark text-foto" style="width: 150px;">{{__('struttura.bagni')}}</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark text-foto" style="width: 150px;">{{__('struttura.esterno')}}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-2" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        @foreach($fotoCamere as $fotoCamera)
                                        
                                        <x-cardFoto
                                        id="{{$fotoCamera['id']}}"
                                        alt="{{$fotoCamera['alt']}}"
                                        img="{{$fotoCamera['img']}}"
                                        />
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        @foreach($fotoBagno as $fotoBagno)
                                        
                                        <x-cardFoto
                                        id="{{$fotoBagno['id']}}"
                                        alt="{{$fotoBagno['alt']}}"
                                        img="{{$fotoBagno['img']}}"
                                        />
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        @foreach($fotoCucina as $fotoCucina)
                                        
                                        <x-cardFoto
                                        id="{{$fotoCucina['id']}}"
                                        alt="{{$fotoCucina['alt']}}"
                                        img="{{$fotoCucina['img']}}"
                                        />
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        @foreach($fotoEsterno as $fotoEsterno)
                                        
                                        <x-cardFoto
                                        id="{{$fotoEsterno['id']}}"
                                        alt="{{$fotoEsterno['alt']}}"
                                        img="{{$fotoEsterno['img']}}"
                                        />
                                        @endforeach

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