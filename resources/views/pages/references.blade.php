@extends('layouts.app')
@section('content')
<header class="hero">
      <div class="content left">
        <section>
          <h3>Bienvenu à</h3>
          <h1 class="text-white">White Dove Company</h1>
        </section>
      </div>
    </header>
    <main class="pt-4 pl-4 pr-4">
      <div class="row"> 
        <div class="col-12 mt-3">

        <nav class="navbar nbg-light">
          <form class="form-inline" style="position: relative;right: 0px;">
          <label for=""> <h5 class="pr-3 pt-2"> Secteur : </h5></label>
          <select class="form-control form-control-lg" style="height:50px;border-radius:0px !important;">
            <option selected  value="1">Gouvernance forestière</option>
            <option value="2">En matière de sécurité routière</option>
            <option value="3">En matière de Protection civile et action humanitaire</option>
          </select>
          <button class="btn btn-primary my-2 my-lg-0" type="submit" style="height:50px;border-radius: 0px!important;">afficher</button>
          </form>
        </nav>

        </div>
        </div>
      <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header bg-primary id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <h2 class="mb-0">
                  <button class="btn btn-link text-white" type="button">
                    2014 - 2015
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                   <p class="p-0 mt-2">
                     <h4>1</h4>&nbsp;&nbsp;&nbsp;Consultant pour la création du réseau des institutions de recherché forestière en Afrique central (RIRFAC). Projet financé par le Center for International Forestry Research (CIFOR)
                   </p>
                  <p class="p-0 mt-2">
                  <h4>2</h4>&nbsp;&nbsp;&nbsp;Consultation pour l’ONG Service d’Appui aux Initiatives Locales de Développement (SAILD), financée par le programme FAO FLEGT. Examen des rapports d’observation indépendante externe dans le cadre de la mise en œuvre du projet « Mise en place d’un système national d’observation indépendante externe et normalisé ». Zone du projet : régions de l’Est, Sud, Sud-Ouest.
                  </p>
                  <p class="p-0 mt-2">
                    <h4>3</h4>&nbsp;&nbsp;&nbsp;Consultant dans le projet « Education for Improving Forest Governance» chargé de l’ « Etude sur le niveau d’intégration de la gouvernance forestière dans les programmes universitaires et la pédagogie universitaire ». Projet financé par Forêt et développement rural (FODER) et le Centre for International Development and Training, University of Wolverhampton (United Kingdom). Diagnostic des programmes et de la pédagogie universitaires, rédaction du rapport, proposition d’un cadre d’amélioration de la pédagogie et de programmes de formation orientés gouvernance forestière
                  </p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-primary" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed text-white" type="button">
                    2016-2017
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">

                  <p class="p-0 mt-2">
                   <h4>1</h4>&nbsp;&nbsp;&nbsp; Elaboration de trois programmes de référence de formation en gouvernance forestière au Cameroun, cofinancée par FAO et le Centre for International Development and Training (CIDT) de l’Université de Wolverhampton
                  </p>
                  <p class="p-0 mt-2">
                    <h4>2</h4>&nbsp;&nbsp;&nbsp;Consultation pour l’ONG Service d’Appui aux Initiatives Locales de Développement (SAILD), financée par le programme FAO FLEGT.
                    Etude sur l’état des lieux de la légalité et la traçabilité des bois des forêts communautaires au Cameroun dans le cadre de la mise en œuvre du projet « mise en place d’un système de vérification communautaire de la légalité des bois des forêts communautaire (SVCL) ».
                    Etude sur la gestion des redevances forestières annuelle destinées aux communautés villageoises riveraines des forêts. Dans le cadre du projet d’accompagnement des comités paysans-forêts et les comités riverain à l’aménagement forestier et au suivi de gestion des RFA. Zone du projet : arrondissement de Lomié (région de l’Est du Cameroun)
                  </p>
                
                </div>
              </div>
            </div>
          
          </div>
      </div>
    </div>
    </main>

@stop 