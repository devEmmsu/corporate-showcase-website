<?php

namespace App\Http\Controllers;
use App\Models\Expert;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function domaine_competences(){
        return view('pages.competences',[
            'title'=>'domaines de competences',
            'route'=>'domaine-de-competences'
            ]) ;
    }

    public function nos_clients(){
        return view('pages.clients',[
            'title'=>'White Dove | nos clients',
            'route'=>'nos-clients'
            ]) ;
    }

    public function references(){
        return view('pages.references',[
            'title'=>'White Dove | references',
            'route'=>'references'
            ]) ;
    }

    public function projets(){
        
        return view('pages.projets',[
            'title'=>'White Dove | projets',
            'route'=>'projets'
            ]) ;
    }

    public function project_en_cours(){
        return view('pages.project_en_cours',[
            'title'=>'White Dove | nos projets en cours ',
            'route'=>'projets/en-cours'
            ]) ;
    }

    public function about(){
        return view('pages.about',[
            'title'=>'White Dove | about',
            'route'=>'about'
            ]) ;
    }

    public function experts(){

        return view('pages.experts',[
            'title'=>'White Dove | nos experts',
            'experts'=>Expert::paginate(8),
            'route'=>'nos-experts'
            ]) ;
    }
    
}
