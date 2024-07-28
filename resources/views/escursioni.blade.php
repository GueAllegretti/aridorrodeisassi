@section('meta_keywords')
@section('meta_description')

<x-layout>
  <x-slot name="title">Escursioni</x-slot>

  <div class="container-fluid bg-breadcrumb page-header py-5">
    <div class="container pt-5 pb-2">
        <h1 class="display-3 text-dark mb-2 mt-4">Escursioni</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Escursioni</li>
            </ol>
        </nav>
    </div>
</div>
        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container">
                <div class="text-center">
                    <h1 class="display-5 mb-5">Tour privati nel Parco UNESCO</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item rounded">
                            <img class="img-fluid rounded-top " src="https://scontent-fco2-1.xx.fbcdn.net/v/t39.30808-6/433257527_795360669280385_2737200115673165512_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=CJFlpaMoZKoQ7kNvgHLQa8f&_nc_ht=scontent-fco2-1.xx&gid=ApWdMFQKYB8jar0nnX1kyMp&oh=00_AYB2Z3kmjF4NnbWXO4cmrWDtyBRWzNBDTAY6m1keadz7JQ&oe=66AC2AFF" alt="">
                            <div class="team-content text-center py-3 bg-dark rounded-bottom">
                                <h4 class="text-primary">Francesco</h4>
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
                          <h1 class="display-5 mb-4">Lorem ipsum dolor</h1>
                          <p class="mb-4">Presso la nostra struttura è possibile organizzare Tour privati nel Parco UNESCO della Murgia Materana con finale nel belvedere con vista favolosa su tutti i Rioni Sassi. 
<br>
                            Tour di 2 ore e mezza con ingresso esclusivo a 4 Chiese rupestri affrescate scavate nella roccia. <br>
                            Il trekking parte da Jazzo Gattini, costeggeremo il canyon, visiteremo un territorio con presenze di tombe millenarie, antiche cisterne, masserie, luoghi di culto ancestrali ed una natura incontaminata. Termineremo con sosta al belvedere di "Murgia Timone" con vista unica e suggestiva sugli antichissimi Sassi!
                            <ul>Prezzi con compresi trasporto a/r al Parco e tutti gli ingressi:
                                <li>⁠Intero adulti: 20€ a testa per 2 persone, da 3 persone in su 15€ a testa.
                                </li>   
                                <li>
                                    ⁠Ridotto ragazzi dai 7 ai 14 anni 12€.
                                </li>
                                <li>
                                    Gratis per bambini fino ai 7 anni.
                                </li>
                            </ul>
                            
                            Sono una guida escursionistica ambientale professionale certificata, iscritta all'AIGAE.</p>
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