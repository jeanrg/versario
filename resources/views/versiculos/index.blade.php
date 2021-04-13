@extends('layouts.app')

@section('css')

    <!-- Styles -->
    <link href="{{ asset('calendario/css/all.min.css') }}" rel="stylesheet">

    <style>
        .black{background-color:#252525;}
        .foreground{
            background-image:url('/images/paisaje.jpg');
            background-size:cover;
            background-attachment: fixed;
            z-index: 2;
            top: 100vh;
            line-height: 30px;
            font-weight: lighter;
            padding: 40px;
            color: rgb(209, 231, 6);
            text-shadow: 1px 1px 2px black;

        }
    </style>

@endsection

@section('content')

    <section class="card border border-light bg-light shadow cover text-dark overflow-hidden">
        <div class="container foreground black">
          <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-10 text-center text-shadow">
              <h4 class="text-secondary"><span class="text-light font-weight-bold">Version 1.0</span></h4>
              <h1 class="display-1 font-weight-bold mt-2 mb-5">Versario biblico <span class="d-lg-block">2021</span></h1>
              <a  href="{{ route('home') }}" class="btn btn-success btn-lg rounded-pill px-6">Ir al versario biblico</a>
            </div>
          </div>
        </div>
    </section>
@endsection

@section('js')

    <!-- Scripts -->
    <script src="{{ asset('calendario/js/all.min.js')}}" defer></script>

@endsection
