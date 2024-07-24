@section('meta_keywords')
@section('meta_description')

<x-layout>
  <x-slot name="title">A ridosso dei sassi Casa vacanza Matera</x-slot>


  <section id="masthead" class="masthead">

    <div class="masthead d-flex align-items-center">
      <div class="container vh-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-lg-6 text-center">
                <h1 class="display-1 mb-4 animate__animated animate__bounceInDown">A ridosso dei sassi</h1>
                <a href="{{route('contact')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animate__animated animate__bounceInLeft">Prenota ora</a>
                <a href="{{route('casa')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animate__animated animate__bounceInLeft">Scopri di più</a>
          </div>
        </div>
      </div>
    </div>
  
  </section>

<!-- Hero End -->


<!-- About Satrt -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
                <img src="img/camera-1.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow animate__animated animate__bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Casa</small>
                <h1 class="display-5 mb-4">Lorem ipsum dolor</h1>
                <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, facilis, animi unde in voluptatibus, enim tempora odit recusandae provident quam nulla necessitatibus eligendi eaque ad deleniti hic iste! Assumenda, quo?</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Lorem ipsum dolor
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Lorem ipsum dolor
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Lorem ipsum dolor
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i>Lorem ipsum dolor
                    </div>
                </div>
                <a href="" class="btn btn-primary py-3 px-5 rounded-pill">Casa<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start-->
<div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
               <div class="row g-4">
                    <div class="col-sm-4 wow animate__animated animate__bounceInUp" data-wow-delay="0.3s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">689</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow animate__animated animate__bounceInUp" data-wow-delay="0.5s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">107</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Expert Chefs</p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow animate__animated animate__bounceInUp" data-wow-delay="0.7s">
                        <div class="faqt-item bg-primary rounded p-4 text-center">
                            <i class="fas fa-check fa-4x mb-4 text-white"></i>
                            <h1 class="display-4 fw-bold" data-toggle="counter-up">253</h1>
                            <p class="text-dark text-uppercase fw-bold mb-0">Events Complete</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow animate__animated animate__bounceInUp" data-wow-delay="0.1s">
                <div class="video">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

  </x-layout>