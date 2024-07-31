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
            <li class="breadcrumb-item text-dark fw-bold fst-italic active" aria-current="page">Escursioni</li>
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
                            <img class="img-fluid rounded-top " src="https://scontent-fco2-1.xx.fbcdn.net/v/t39.30808-6/433257527_795360669280385_2737200115673165512_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=CJFlpaMoZKoQ7kNvgHLQa8f&_nc_ht=scontent-fco2-1.xx&gid=ApWdMFQKYB8jar0nnX1kyMp&oh=00_AYB2Z3kmjF4NnbWXO4cmrWDtyBRWzNBDTAY6m1keadz7JQ&oe=66AC2AFF" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-light">Francesco</h4>
                                <p class="text-white mb-0">Escursionistica ambientale professionale</p>
                            </div>
                            <div class="team-icon d-flex flex-column justify-content-center m-4">
                                <a class="share btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link btn btn-primary btn-md-square rounded-circle mb-2" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="text-container">
                          <h1 class="display-5 mb-4">Tour Privati</h1>
                          <h6 class="mb-4">nel Parco UNESCO della Murgia Materana</h6>
                          <p class="mb-4">Alla nostra struttura offriamo la possibilità di organizzare tour privati nel Parco UNESCO della Murgia Materana, culminanti con una vista spettacolare su tutti i Rioni Sassi dal belvedere.</p>

                          <p>Il tour ha una durata di 2 ore e mezza e include l'accesso esclusivo a quattro chiese rupestri affrescate, scavate nella roccia. L'itinerario inizia da Jazzo Gattini e prevede un percorso lungo il canyon, dove si potranno ammirare tombe millenarie, antiche cisterne, masserie, luoghi di culto ancestrali e una natura incontaminata. Il tour si conclude con una sosta al belvedere di "Murgia Timone", da cui si gode una vista unica e suggestiva sugli antichissimi Sassi.</p>
                          
                          <ul>
                              <li>Adulti: 20€ a persona per gruppi di 2 persone; 15€ a persona per gruppi di 3 o più persone.</li>
                              <li>Ridotto per ragazzi dai 7 ai 14 anni: 12€.</li>
                              <li>Gratuito per bambini fino ai 7 anni.</li>
                          </ul>
                          
                          <p>I prezzi includono il trasporto andata e ritorno al Parco e tutti gli ingressi.</p>
                          
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

<!-- tour -->
<section id="tour" class="tour py-5">
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