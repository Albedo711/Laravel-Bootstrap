@extends('layouts.app')

@section('title', 'About Page')

@section('content')
    <h1 class="text-center">About Us</h1>
    <p>Ini halaman About</p>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/Laburus.jpeg" class="card-img-top" alt="Laburus">
                    <div class="card-body">
                        <h5 class="card-title">Laburus</h5>
                        <p class="card-text">Entitas ini tidak terlalu jahat</p>
                        <p class="card-text">Entitas ini sering berada di barbershop</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

          
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/Labumut.jpeg" class="card-img-top" alt="Labumut">
                    <div class="card-body">
                        <h5 class="card-title">Labumut</h5>
                        <p class="card-text">Entitas ini tidak terlalu jahat</p>
                        <p class="card-text">Entitas ini sering mencium orang</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="assets/Ambalabu.jpeg" class="card-img-top" alt="Ambalabu">
                    <div class="card-body">
                        <h5 class="card-title">Ambalabu</h5>
                        <p class="card-text">Entitas ini sangat jahat</p>
                        <p class="card-text">Entitas ini sering mengejar orang yang membawa boneka labubu</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
