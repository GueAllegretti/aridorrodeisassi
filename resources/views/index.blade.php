@section('meta_keywords')
@section('meta_description')

<x-layout>
  <x-slot name="title">A ridosso dei sassi Casa vacanza Matera</x-slot>


<section id="masthead" class="masthead pb-5">
    <div class="masthead d-flex align-items-center pb-5">
      <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-6 text-center">
                <h1 class="display-1 mb-4 wow animate__animated animate__fadeInUp">A ridosso dei sassi<br> Casa vacanza</h1>
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
                    <img src="img/camera-1.webp" class="img-fluid rounded" alt="">
                    <div class="fade-circle"></div>
                    <div class="small-circle-second"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="text-container">
                    <h1 class="display-5 mb-4">La struttura</h1>
                    <p class="mb-2">A due passi dai Sassi di Matera, la Casa Vacanze "A Ridosso dei Sassi" offre un confortevole alloggio familiare a piano terra con ingresso indipendente e ampio parcheggio gratuito disponibile. <br><br> C'è anche la possibilità di un parcheggio privato a pagamento. L'alloggio è ad uso esclusivo e personale e sono presenti due camere da letto, un soggiorno/cucina e due bagni.</p>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="booking d-flex align-items-center justify-content-start">
                                <a href="https://www.booking.com/hotel/it/a-ridosso-dei-sassi.it.html#hp_facilities_box" target="_blank">
                                    <img src="img/bookingcom-1.svg" alt="Booking.com Logo" class="logo">
                                </a>
                                <div class="score">9.8<i class="fa-regular fa-thumbs-up text-primary ms-2"></i></div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="airbnb d-flex align-items-center justify-content-start">
                                <a href="https://www.airbnb.it/rooms/1195113346285763264?viralityEntryPoint=1&s=76&source_impression_id=p3_1722626452_P3iH0jSPJfCUUzXH" target="_blank">
                                    <img src="img/airbnb.svg" alt="Airbnb Logo" class="logo">
                                </a>
                                <div class="score">5/5<i class="fa-regular fa-star text-warning ms-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('casa')}}" class="btn btn-primary py-3 px-5 rounded-pill">Scopri di più<i class="fas fa-arrow-right ps-2"></i></a>
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
                <img src="img/posizione-1.webp" class="img-fluid rounded" alt="Left Image">
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-center mb-4">
                <div class="circle mt-5">
                    <div class="circle-text"><p class="fw-bold">Posizione</p></div>
                </div>
                <div class="text-center mt-5">
                    <p>La Casa Vacanze "A Ridosso dei Sassi" è immersa nella suggestiva cornice dei Sassi di Matera, a pochi passi da Piazza San Pietro Caveoso, offrendo una splendida vista sulle grotte ruprestri che si affacciano sul canyon della Gravina. <br><br> Perditi tra i romantici vicoli di Matera, un museo a cielo aperto, tra le più antiche città del mondo, regalando ambientazioni cinematografiche degne delle pellicole di Pier Paolo Pasolini.</p>
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
                    <h1 class="display-5 mb-4">Tour privati</h1>
                    <p class="mb-2">Presso la nostra struttura è possibile organizzare Tour privati nel Parco UNESCO della Murgia Materana con finale nel belvedere con vista favolosa su tutti i Rioni Sassi. 
                    </p>
                    <a href="{{route('escursioni')}}" class="btn btn-primary py-3 px-5 rounded-pill">Scopri di più<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-container position-relative">
                    <div class="fade-circle-expedition"></div>
                    <div class="small-circle-expedition"></div>
                    <div class="video">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-bs-target="#videoModal" data-bs-video="https://fb.watch/tIvPZz11ET/">
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
                <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fb-video" data-href="https://www.facebook.com/ExpeditionOutdoorMatera/videos/2455798671287704/" data-width="500" data-show-text="false"><blockquote cite="https://www.facebook.com/ExpeditionOutdoorMatera/videos/2455798671287704/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ExpeditionOutdoorMatera/videos/2455798671287704/"></a><p></p>Pubblicato da <a href="https://www.facebook.com/ExpeditionOutdoorMatera">Expedition Outdoor</a> su Domenica 2 giugno 2024</blockquote></div>
            </div>
        </div>
    </div>
</div>
{{-- Escursioni index end --}}
{{-- 
@if($cookieConsentConfig['enabled'] && ! $alreadyConsentedWithCookies)

    @include('cookie-consent::dialogContents')

    <script>

        window.laravelCookieConsent = (function () {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = '{{ config('session.domain') ?? request()->getHost() }}';

            function consentWithCookies() {
                setCookie('{{ $cookieConsentConfig['cookie_name'] }}', COOKIE_VALUE, {{ $cookieConsentConfig['cookie_lifetime'] }});
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/{{ config('session.secure') ? ';secure' : null }}'
                    + '{{ config('session.same_site') ? ';samesite='.config('session.same_site') : null }}';
            }

            if (cookieExists('{{ $cookieConsentConfig['cookie_name'] }}')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>

@endif --}}

  </x-layout>