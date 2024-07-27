@section('meta_keywords')
@section('meta_description')

<x-layout>
  <x-slot name="title">A ridosso dei sassi Casa vacanza Matera</x-slot>


  <section id="masthead" class="masthead">

    <div class="masthead d-flex align-items-center">
      <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-6 text-center">
                <h1 class="display-1 mb-4 animate__animated animate__bounceInDown">A ridosso dei sassi<br> Casa vacanza</h1>
                <a href="{{route('contact')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animate__animated animate__bounceInLeft">Prenota ora</a>
                <a href="{{route('casa')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animate__animated animate__bounceInLeft">Scopri di più</a>
          </div>
        </div>
      </div>
    </div>
  
  </section>


<!-- Casa Start -->
<section id="casaindex" class="casaindex m-5">
    <div class="container-fluid p-5 m-5">
        <div class="container-fluid mt-5 mb-5">
            <div class="row align-items-center position-relative">
                <div class="col-lg-5">
                    <div class="image-container">
                        <img src="img/camera-1.jpg" class="img-fluid rounded" alt="">
                        <div class="fade-circle animate__animated animate__zoomIn"></div>
                        {{-- <div class="small-circle"></div> --}}
                        <div class="small-circle-second"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-container">
                        <h1 class="display-5 mb-4">Lorem ipsum dolor</h1>
                        <p class="mb-4">A due passi dai Sassi di Matera la Casa Vacanze "A Ridosso dei Sassi" offre un confortevole alloggio famigliare a piano terra con ingresso indipendente e con ampio parcheggio gratuito disponibile. C'è anche la possibilità di un parcheggio privato a pagamento. L'alloggio è ad uso esclusivo e personale e sono presenti due camere da letto, un soggiorno/cucina e due bagni.</p>
                        <a href="" class="btn btn-primary py-3 px-5 rounded-pill">Scopri di più<i class="fas fa-arrow-right ps-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Casa End -->

{{-- Posizione --}}
<section id="posizione" class="posizione m-5">
    <div class="container-fluid p-5 m-5">
        <div class="row">
            <div class="col-lg-4 d-flex justify-content-center mb-4 mb-lg-0">
                <img src="img/posizione-1.jpeg" class="img-fluid rounded" alt="Left Image">
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-center mb-4 mb-lg-0">
                <div class="circle  mt-5">
                    <div class="circle-text">Posizione</div>
                </div>
                <div class="text-center mt-5">
                    <p>Siamo (come evidenzia il nome) a ridosso dei Sassi. Una zona tranquilla con un ampio parcheggio pubblico gratuito in pieno centro cittadino. <br> In una scalinata si entra nel centro storico dei Sassi di Matera (Via Casalnuovo). <br> Nei dintorni ci sono ottimi ristoranti, bar, pizzerie, distributori di benzina, farmacie e negozi di vario genere, la fermata dei bus urbani e proprio avanti al palazzo.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center mb-4 mb-lg-0">
                <img src="img/posizione-2.jpeg" class="img-fluid rounded" alt="Right Image">
            </div>
        </div>
    </div>
</section>
{{-- Posizione end --}}


{{-- Escursioni index Start --}}
<section id="escursioniindex" class="escursioniindex m-5">
    <div class="container-fluid p-5 m-5">
        <div class="container-fluid mt-5 mb-5">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                <div class="text-container">
                    <h1 class="display-5 mb-4">Lorem ipsum dolor</h1>
                    <p class="mb-4">A due passi dai Sassi di Matera la Casa Vacanze "A Ridosso dei Sassi" offre un confortevole alloggio famigliare a piano terra con ingresso indipendente e con ampio parcheggio gratuito disponibile. C'è anche la possibilità di un parcheggio privato a pagamento. L'alloggio è ad uso esclusivo e personale e sono presenti due camere da letto, un soggiorno/cucina e due bagni.</p>
                    <a href="" class="btn btn-primary py-3 px-5 rounded-pill">Scopri di più<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
                    <div class="col-lg-6">
                        <div>
                            <div class="fade-circle-expedition animate__animated animate__zoomIn"></div>
                            <div class="small-circle-expedition"></div>
                            <div class="video">
                                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-bs-target="#videoModal" data-bs-video="https://youtu.be/ad_qInb1FFw">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe id="videoModalIframe" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Escursioni index end --}}


  </x-layout>