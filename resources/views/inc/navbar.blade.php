
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="{{ url('/') }}">
          <img
          src="{{ asset('images/logo_dark.png') }}"
          width="auto"
          height="45"
          class="d-inline-block align-top mr-2"
          alt="logo"
        />
          </a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mobileNavbar" aria-controls="mobileNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="navbar-collapse justify-content-lg-end collapse" id="mobileNavbar" style="font-size: 15px;">
            <ul class="navbar-nav">
                <li class="nav-item " >
                  <a class="nav-link text-primary text-uppercase" href="{{ route('domaine') }}">Domaines de compétences</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary text-uppercase" href="{{ route('references') }}">Nos Références</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary text-uppercase" href="{{ route('nos_clients') }}">Nos Clients</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary text-uppercase" href="{{ route('projets') }}">Nos Projets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary text-uppercase" href="{{ route('project_en_cours') }}">Projets En Cours</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary text-uppercase" href="{{ route('experts') }}">Principaux Experts</a>
                </li>
          </ul>
          </div>
      </nav>