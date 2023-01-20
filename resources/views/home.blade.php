@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a Windbnb, alojamientos vacacionales') }}</div>

                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset ('/img/rural.jpg')}}" class="d-block w-100">
                        
                        
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset ('/img/peculiar.jpg')}}" class="d-block w-100">
                    
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset ('/img/city2.jpg')}}" class="d-block w-100">
                        
                      </div>
            
                      <div class="carousel-item">
                        <img src="{{ asset ('/img/camping.jpg')}}" class="d-block w-100">
                        
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset ('/img/castillo.jpg')}}" class="d-block w-100">
                        
                      </div>
            
                      <div class="carousel-item">
                        <img src="{{ asset ('/img/beautiful.jpg')}}" class="d-block w-100">
                        
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
