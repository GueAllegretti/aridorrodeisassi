@section('meta_keywords')
@section('meta_description')

<x-layout>
  <x-slot name="title">A ridosso dei sassi Casa vacanza Matera</x-slot>


<section id="masthead" class="masthead pb-5">
    <div class="masthead d-flex align-items-center pb-5">
      <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-6 text-center">
                <h1 class="display-1 mb-4">A ridosso dei sassi<br> Casa vacanza</h1>
                <a href="{{route('contact')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animate__animated animate__zoomIn">Prenota ora</a>
                <a href="{{route('casa')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animate__animated animate__zoomIn">Scopri di più</a>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- Casa Start -->
<section id="casaindex" class="casaindex py-5">
    <div class="container py-5">
        <div class="row align-items-center position-relative">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="image-container image-casa">
                    <img src="img/camera-1.jpg" class="img-fluid rounded" alt="">
                    <div class="fade-circle"></div>
                    <div class="small-circle-second"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="text-container">
                    <h1 class="display-5 mb-4">Lorem ipsum dolor</h1>
                    <p class="mb-5">A due passi dai Sassi di Matera, la Casa Vacanze "A Ridosso dei Sassi" offre un confortevole alloggio familiare a piano terra con ingresso indipendente e ampio parcheggio gratuito disponibile. C'è anche la possibilità di un parcheggio privato a pagamento. L'alloggio è ad uso esclusivo e personale e sono presenti due camere da letto, un soggiorno/cucina e due bagni.</p>
                    <a href="" class="btn btn-primary py-3 px-5 rounded-pill">Scopri di più<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Casa End -->

{{-- Posizione --}}
<section id="posizione" class="posizione">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 d-flex justify-content-center mb-4">
                <img src="img/posizione-1.jpeg" class="img-fluid rounded" alt="Left Image">
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-center mb-4">
                <div class="circle mt-5">
                    <div class="circle-text">Posizione</div>
                </div>
                <div class="text-center mt-5">
                    <p>Siamo (come evidenzia il nome) a ridosso dei Sassi. Una zona tranquilla con un ampio parcheggio pubblico gratuito in pieno centro cittadino. <br> In una scalinata si entra nel centro storico dei Sassi di Matera (Via Casalnuovo). <br> Nei dintorni ci sono ottimi ristoranti, bar, pizzerie, distributori di benzina, farmacie e negozi di vario genere, la fermata dei bus urbani e proprio avanti al palazzo.</p>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center mb-4">
                <img src="img/place.png" class="img-fluid rounded" alt="Right Image">
            </div>
        </div>
    </div>
</section>
{{-- Posizione end --}}


{{-- Escursioni index Start --}}
<section id="escursioniindex" class="escursioniindex py-5">
    <div class="container py-5">
        <div class="row align-items-center position-relative">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="text-container">
                    <h1 class="display-5 mb-4">Lorem ipsum dolor</h1>
                    <p class="mb-4">Presso la nostra struttura è possibile organizzare Tour privati nel Parco UNESCO della Murgia Materana con finale nel belvedere con vista favolosa su tutti i Rioni Sassi. 
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5 rounded-pill">Scopri di più<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-container position-relative">
                    <div class="fade-circle-expedition"></div>
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
</section>


<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="https://youtu.be/ad_qInb1FFw" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Escursioni index end --}}


  </x-layout>