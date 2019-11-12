@extends('layouts.app')
@section('content')
<header class="hero">
      <div class="content">
        <section>
          <h3>Bienvenu à</h3>
          <h1 class="text-white">White Dove Company</h1>
        </section>
      </div>
    </header>
    <main class="pt-4 pl-4 pr-4">
      <div class="container">
        <div class="row">
          <div class="container mt-5">
              <h2>Institutions gouvernementales (Ministères, Programmes nationaux, etc.)</h2>
              <p>
                  <ul>
                      <li>1. Ministère de l’administration territoriale et de la décentralisation pour REPC et élaboration des plans ORSEC (DPC)</li>
                      <li>2. Ministère des Transports pour formations, recyclages et production de supports divers (DTR)</li>
                      <li>3. Ministère du travail et de la prévoyance sociale</li>
                      <li>4. Ministère de la Santé publique pour enquêtes, études diverses </li>
                      <br>

                  </ul>
                  <div class="ml-5"> 
                    <strong>
                      Organisations internationales et Institutions intergouvernementales<br>
                      ONG, Associations, Centres de recherche internationaux<br>
                      ONG, Associations nationales<br>
                      Entreprises parapubliques et privées<br>
                      Collectivités territoriales<br>
                    </strong>
                </div>
              </p>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/1.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/2.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/3.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/4.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/5.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/6.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="text-center text-primary">
              <img
                src="{{ asset('clients/7.jpg') }}"
                class="rounded-circle"
                alt="..."
              />
              <!-- <h3 class="lead my-4">Recherche Opérationelle</h3> -->
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    </main>

@stop 