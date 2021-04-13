@extends('layouts.app')

@section('css')

<!-- Styles -->
<link href="{{ asset('calendario/calendar/main.css') }}" rel="stylesheet">
<link href="{{ asset('calendario/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/sweetAlert2/sweetalert2.min.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/animate.css/animate.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header text-muted font-weight-bold">{{ __('Calendario') }}</div>

                <div class="card-body">
                    <div id="versario"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

  <!-- Scripts -->
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script> --}}
  <script src="{{ asset('calendario/calendar/main.js') }}" defer></script>
  <script src="{{ asset('calendario/calendar/locales-all.js') }}" defer></script>
   <script src="{{ asset('calendario/js/all.min.js')}}" defer></script>
   <script src="{{asset('calendario/calendar/versario.js')}}"></script>
   <script src="{{ asset('popper/popper.min.js')}}" ></script>
   <script src="{{ asset('plugins/sweetAlert2/sweetalert2.all.min.js')}}" ></script>

@endsection

@section('modals')

    <x-modalversiculo/>

@endsection
