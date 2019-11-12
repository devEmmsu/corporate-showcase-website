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
          
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
            tenetur fuga laudantium natus tempora excepturi modi consequuntur
            aperiam eaque totam recusandae possimus voluptatum velit, culpa cum
            alias quibusdam odit itaque? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Debitis tenetur fuga laudantium natus tempora
            excepturi modi consequuntur aperiam eaque totam recusandae possimus
            voluptatum velit, culpa cum alias quibusdam odit itaque? Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Debitis tenetur fuga
            laudantium natus tempora excepturi modi consequuntur aperiam eaque
            totam recusandae possimus voluptatum velit, culpa cum alias
            quibusdam odit itaque? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Debitis tenetur fuga laudantium natus tempora
            excepturi modi consequuntur aperiam eaque totam recusandae possimus
            voluptatum velit, culpa cum alias quibusdam odit itaque? Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Debitis tenetur fuga
            laudantium natus tempora excepturi modi consequuntur aperiam eaque
            totam recusandae possimus voluptatum velit, culpa cum alias
            quibusdam odit itaque?
          </p>
          
        </div>
        <div class="row mb-2 mt-2" style="padding-bottom: 20px;">
            @if($experts->count() >=1)
            @foreach($experts as $expert)
            <!-- team   -->
            <div class="card col-lg-3 col-md-3 p-0 mb-2 " style="width: 18rem;box-shadow: 3px 3px 1px #cacad4;">
                <img src="{{ asset('uploads/'.$expert->featured) }}" class="card-img-top" alt="" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title text-center text-primary">{{ $expert->name }}</h5>
                    <p class="card-text">{{ $expert->about }}</p>
                    <p class="text-center">
                      <a href="{{ $expert->facebook }}" class="btn btn-primary" target="_blank"><i class="fa fa-facebook-square f-20" aria-hidden="true" ></i> </a>
                      <a href="mailto:{{ $expert->gmail }}" class="btn btn-primary" target="_blank"> <img src="{{ asset('gmail.png') }}"  style="height:20px">   </a>
                    </p>
                </div>
            </div>
            <!-- end team   -->
            @endforeach
            @endif
            
        </div>

        <div class="row mb-2 mt-2" style="padding-bottom: 20px;">
           {{ $experts->links() }}
        </div>
    </main>

@stop 