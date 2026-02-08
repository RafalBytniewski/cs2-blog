@extends('layouts.app')

@section('content')
    <section class="bg-dark text-light py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <span class="badge text-bg-info text-uppercase mb-3">CS2 Blog</span>
                    <h1 class="display-4 fw-bold mb-3">Nowoczesna baza wiedzy i narzędzia dla społeczności Counter-Strike 2</h1>
                    <p class="lead text-secondary mb-4">
                        Organizuj mapy, dziel się taktykami i analizuj granaty w jednym miejscu. Wszystko w czytelnym,
                        responsywnym interfejsie.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        @guest
                            <a class="btn btn-info btn-lg" href="{{ route('register') }}">Załóż konto</a>
                            <a class="btn btn-outline-light btn-lg" href="{{ route('login') }}">Zaloguj się</a>
                        @else
                            <a class="btn btn-info btn-lg" href="{{ route('maps.index') }}">Przeglądaj mapy</a>
                            <a class="btn btn-outline-light btn-lg" href="{{ route('users.show', Auth::user()->id) }}">Mój profil</a>
                        @endguest
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 p-lg-5 bg-secondary rounded-4 shadow-lg">
                        <h2 class="h4 mb-3">Co zyskujesz?</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-start mb-3">
                                <span class="badge bg-info me-3">01</span>
                                <div>
                                    <h3 class="h6 mb-1">Szybki dostęp do map i taktyk</h3>
                                    <p class="text-secondary mb-0">Przechowuj najważniejsze ustawienia i strategie w jednym miejscu.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <span class="badge bg-info me-3">02</span>
                                <div>
                                    <h3 class="h6 mb-1">Biblioteka granatów</h3>
                                    <p class="text-secondary mb-0">Notuj użyteczne lineupy i taguj je pod kątem sytuacji.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="badge bg-info me-3">03</span>
                                <div>
                                    <h3 class="h6 mb-1">Współpraca zespołowa</h3>
                                    <p class="text-secondary mb-0">Udostępniaj plany reszcie drużyny i omawiaj je w czasie rzeczywistym.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100 border-0 bg-secondary text-light shadow-sm">
                        <div class="card-body">
                            <h3 class="h5">Mapy i callouty</h3>
                            <p class="text-secondary mb-0">Pamiętaj najważniejsze punkty i callouty dzięki uporządkowanym mapom.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100 border-0 bg-secondary text-light shadow-sm">
                        <div class="card-body">
                            <h3 class="h5">Granaty w jednym miejscu</h3>
                            <p class="text-secondary mb-0">Sortuj lineupy według mapy, sytuacji i typu granatu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100 border-0 bg-secondary text-light shadow-sm">
                        <div class="card-body">
                            <h3 class="h5">Statusy i postępy</h3>
                            <p class="text-secondary mb-0">Śledź, które strategie są już gotowe do użycia w meczu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card h-100 border-0 bg-secondary text-light shadow-sm">
                        <div class="card-body">
                            <h3 class="h5">Dopasowane do mobile</h3>
                            <p class="text-secondary mb-0">Sprawdzaj taktyki na telefonie podczas treningu lub przerwy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <h2 class="fw-bold">Zbuduj przewagę informacyjną dla swojej drużyny</h2>
                    <p class="text-secondary mb-0">
                        Zbierz wszystkie materiały w jednym panelu i udostępnij je znajomym. Dzięki responsywnemu układowi
                        szybko znajdziesz to, czego potrzebujesz — niezależnie od urządzenia.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    @guest
                        <a class="btn btn-outline-light btn-lg" href="{{ route('register') }}">Zacznij teraz</a>
                    @else
                        <a class="btn btn-outline-light btn-lg" href="{{ route('maps.index') }}">Przejdź do panelu</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection
