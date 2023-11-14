@extends('layouts.guest')

@section('page-title', 'ReviewHUB')

@section('main-content')
    <div class="home_page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1>
                        <span class="span_title">Review HUB</span>: L'app per i Proprietari di Hotel Attenti alle Opinioni
                    </h1>
                    <p>
                        Migliora le attività quotidiane della tua struttura con la nostra innovativa app per i proprietari di hotel. Gestire e rispondere alle recensioni degli ospiti non è mai stato così semplice ed efficiente.
                    </p>
                    <a href="{{ route('register') }}">
                        <button class="button">
                            Inizia La prova Gratuita
                        </button>
                    </a>
                </div>
                <div class="col-12 col-lg-5">
                    <img class="w-100" src="img/home-page-img.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="home_page_2">

    </div>
@endsection
