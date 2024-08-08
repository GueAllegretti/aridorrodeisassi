<x-layout>
    
    
    <x-slot name="title">{{__('generico.contatti')}}</x-slot>
    
    <div class="bg-breadcrumb d-flex align-items-center page-header py-5">
        <div class="container position-relative d-flex flex-column align-items-center pt-5 pb-2" data-aos="fade">
            <h2 class="mt-5 display-4">{{__('generico.contatti')}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-dark" href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item text-dark fw-bold active" aria-current="page">{{__('generico.contatti')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    
    
    <div class="container-fluid contact py-6" data-wow-delay="0.1s">
        <div class="container">
            <div class="p-5 bg-light rounded contact-form">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3026.674445168598!2d16.612453875915385!3d40.6591062408523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13477edad1c9fef1%3A0xd0e2fef447c81be9!2sVico%20Lucana%2C%2010%2C%2075100%20Matera%20MT!5e0!3m2!1sit!2sit!4v1722159109117!5m2!1sit!2sit" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div>
                            <div class="d-inline-flex w-100 border border-primary border-contact p-4 rounded mb-4">
                                <i class="fas fa-map-marker-alt fa-2x text-contact me-4"></i>
                                <div>
                                    <h4>{{__('contatti.indirizzo')}}</h4>
                                    <p>Vico Lucana 10 75100 Matera, Basilicata</p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100 border border-primary border-contact p-4 rounded mb-4">
                                <i class="fas fa-envelope fa-2x text-contact me-4"></i>
                                <div>
                                    <h4>E-mail</h4>
                                    <p class="mb-2"><a href="mailto:aridossodeisassi@gmail.com?subject={{__('generico.generico_2')}}">aridossodeisassi@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="d-inline-flex w-100 border border-primary border-contact p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-contact me-4"></i>
                                <div>
                                    <h4>{{__('contatti.telefono')}}</h4>
                                    <p class="mb-2"><a href="tel:+393881581971" target="blank">(+39) 388 158 1971</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>