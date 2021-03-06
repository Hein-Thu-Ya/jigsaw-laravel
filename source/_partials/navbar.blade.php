<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">   
        <a class="navbar-brand" href="/">
          <img src="/assets/images/jigsaw.png" width="200">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $page->selected('about') }}" href="{{ $page->baseUrl }}/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page->selected('services') }}" href="{{ $page->baseUrl }}/services">Our Services</a>
                </li>
          </ul>
        </div>
    </div>
</nav>
