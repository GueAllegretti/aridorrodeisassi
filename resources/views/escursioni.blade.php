@section('meta_keywords')
@section('meta_description')

<x-layout>
  <x-slot name="title">Escursioni</x-slot>
  
  <div class="bg-breadcrumb d-flex align-items-center page-header py-5">
    <div class="container position-relative d-flex flex-column align-items-center pt-5 pb-2" data-aos="fade">
      <h2 class="mt-5 display-4">Escursioni</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
          <li class="breadcrumb-item text-dark fw-bold active" aria-current="page">Escursioni</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Team Start -->
  <div class="container-fluid team py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="team-item rounded">
            <img class="img-fluid rounded-top " src="img/about.webp" alt="">
            <div class="team-content text-center py-3 bg-dark rounded-bottom position-relative">
              <h4 class="text-light">Francesco</h4>
              <p class="text-white mb-0">Guida Ambientale Escursionistica professionale<br> certificata AIGAE</p>
              <div class="badge-image">
                <img src="img/aigae.jpeg" alt="Badge" class="img-fluid">
              </div>
            </div>
            <div class="team-icon d-flex flex-column justify-content-center m-4">
              <a class="share btn btn-primary btn-md-square rounded-circle mb-2 d-none d-md-block" href="tel:+393881581971" target="blank"><i class="fas fa-phone"></i></a>
              <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="https://www.facebook.com/ExpeditionOutdoorMatera" target="blank"><i class="fab fa-facebook-f"></i></a>
              <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="http://api.whatsapp.com/send?phone=+393881581971&text=Salve, vorrei avere maggiori informazioni" target="blank"><i class="fa-brands fa-whatsapp"></i></a>
              <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href="https://www.instagram.com/expeditionoutdoormatera/" target="blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="text-container">
            <h1 class="display-5 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">Tour Privati</h1>
            <h6 class="mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">nel Parco UNESCO della Murgia Materana</h6>
            <p class="mb-4">Alla nostra struttura offriamo la possibilità di organizzare tour privati nel Parco UNESCO della Murgia Materana, culminanti con una vista spettacolare su tutti i Rioni Sassi dal belvedere.</p>
            
            <p>Il tour ha una durata di 2 ore e mezza e include l'accesso esclusivo a quattro chiese rupestri affrescate, scavate nella roccia. L'itinerario inizia da Jazzo Gattini e prevede un percorso lungo il canyon, dove si potranno ammirare tombe millenarie, antiche cisterne, masserie, luoghi di culto ancestrali e una natura incontaminata. Il tour si conclude con una sosta al belvedere di "Murgia Timone", da cui si gode una vista unica e suggestiva sugli antichissimi Sassi.</p>
            
            <ul>
              <li><i class="fa-solid fa-caret-right me-2"></i>Adulti: 20€ a persona per gruppi di 2 persone; 
                <li><i class="fa-solid fa-caret-right me-2"></i>Gruppi: 15€ a persona per gruppi di 3 o più persone.</li>
                <li><i class="fa-solid fa-caret-right me-2"></i>Ridotto: 12€ per ragazzi dai 7 ai 14 anni.</li>
                <li><i class="fa-solid fa-caret-right me-2"></i>Gratuito: per bambini fino ai 7 anni.</li>
              </ul>
              <p>I prezzi includono il trasporto andata e ritorno al Parco e tutti gli ingressi.</p>
            </div>
            <div class="col-md-12 text-start">
              <p>Puoi trovarci anche su
                <a href="https://www.getyourguide.it/matera-l1060/esplora-il-parco-unesco-della-murgia-materana-t649609/?ranking_uuid=2bb6f599-54a5-4e33-8dc0-849d1dd92080" target="_blank">
                  <img src="img/gyg.png" alt="get_your_guide_Logo" class="logo">
                </a>
                <a href="https://www.freetour.com/it/matera/exploring-the-unesco-park-of-the-murgia-materana" target="_blank">
                  <img src="img/logo-freetour.jpg" alt="free_tour_logo" class="logo">
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->
    
    <!-- tour -->
    <section id="tour" class="py-5 projects">
      <div class="container py-5">
        
        <div class="section-header text-center">
          <h2>Dai tour</h2>
        </div>
        
        <div class="row gy-4">
          @foreach($works as $work)
          
          <x-cardWork
          id="{{$work['id']}}"
          title="{{$work['title']}}"
          alt="{{$work['alt']}}"
          img="{{$work['img']}}"
          />
          @endforeach
        </div>
        
      </div>
    </section>
    
    
  </x-layout>