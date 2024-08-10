<x-layout>
    
    
    <x-slot name="title">Cookies Policy</x-slot>
    <div class="bg-breadcrumb d-flex align-items-center page-header py-5">
        <div class="container position-relative d-flex flex-column align-items-center pt-5 pb-2" data-aos="fade">
            <h2 class="mt-5 display-4">Cookies Policy</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item text-dark fw-bold active" aria-current="page">Cookies Policy</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">{{__('cookie.titolo')}}</h1>
            </div>
            
            <p class="fw-light">{{__('cookie.testo')}} <b> www.aridossodeisassicasavacanzematera.it </b> {{__('cookie.testo_2')}}</p>
                
                <br/>
                <h5 class="fw-normal">{{__('cookie.testo_3')}}</h5>
                <p class="fw-light">{{__('cookie.testo_4')}}</p>
                <ul>
                    <li class="fw-light">
                        <i class="fa-solid fa-caret-right me-2"></i>
                        <b>{{__('cookie.testo_5')}}.</b>  {{__('cookie.testo_6')}}
                    </li>
                    <li class="fw-light">
                        <i class="fa-solid fa-caret-right me-2"></i>
                        <b> {{__('cookie.testo_7')}} </b> {{__('cookie.testo_8')}}
                    </li>
                </ul>
                
                <br/>
                <h5 class="fw-normal">Cookie analytics</h5>
                <p class="fw-light">{{__('cookie.testo_9')}}</p>
                
                <br/>
                <h5 class="fw-normal">{{__('cookie.testo_10')}}</h5>
                <p class="fw-light">{{__('cookie.testo_11')}}</p>
                
                <br/>
                <h5 class="fw-normal">{{__('cookie.testo_12')}}</h5>
                <p class="fw-light">{{__('cookie.testo_13')}}</p>
                
                <br/>
                <p class="fw-lighter">{{__('cookie.testo_14')}}</p>
                <ul>
                    <li class="fw-lighter">
                        <a href="https://policies.google.com/privacy?hl=it&gl=it" target="blank" class="link-cg"><i class="fa-solid fa-caret-right me-2"></i>Google Analytics</a>
                    </li>
                    <li class="fw-lighter">
                        <a href="https://policies.google.com/technologies/cookies" target="blank" class="link-cg"><i class="fa-solid fa-caret-right me-2"></i>Google+</a>
                    </li>
                    <li class="fw-lighter">
                        <a href="https://www.facebook.com/about/privacy" target="blank" class="link-cg"><i class="fa-solid fa-caret-right me-2"></i>Facebook</a>
                    </li>
                    <li class="fw-lighter">
                        <a href="https://www.linkedin.com/legal/privacy-policy" target="blank" class="link-cg"><i class="fa-solid fa-caret-right me-2"></i>Linkedin</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </x-layout>