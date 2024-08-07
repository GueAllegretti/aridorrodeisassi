<nav class="navbar navbar-expand-lg navbar-dark fixed-top rs-navbar rs-navbar-scroll">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold {{(Route::currentRouteName() == 'index') ? 'active nav-color-active' : ''}}" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'casa') ? 'active nav-color-active' : ''}}" href="{{route('casa')}}">Struttura</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'escursioni') ? 'active nav-color-active' : ''}}" href="{{route('escursioni')}}">Escursioni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'contact') ? 'active nav-color-active' : ''}}" href="{{route('contact')}}">Contatti</a>
        </li>
        <!-- Language Dropdown -->
        <li class="nav-item dropdown ms-auto">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lingua
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>@include('components.locale', ['lang' => 'it', 'nation' => 'it'])</li>
            <li>@include('components.locale', ['lang' => 'en', 'nation' => 'gb'])</li>
            <li>@include('components.locale', ['lang' => 'fr', 'nation' => 'fr'])</li>
            <li>@include('components.locale', ['lang' => 'es', 'nation' => 'es'])</li>
            <li>@include('components.locale', ['lang' => 'de', 'nation' => 'de'])</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
