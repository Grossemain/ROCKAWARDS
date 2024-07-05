@extends('layouts.app')

@section('content')
<div class="container-flex">
    <div class="row">
        <div class="container d-flex flex-column align-items-center text-center m-5">
            <h1>ROCKBAND <span class="text-primary">AWARDS</span> : </h1>
        <h2>QUELS SONT LES <span class="text-primary">MEILLEURS GROUPES DE ROCK ?</span></h2>
        </div>

        @guest
        <div class="col-md-6">
            <div class="container d-flex flex-column align-items-center mt-5">
                <span class="h2 "><i class="bi bi-check-lg"></i>Découvre les nominées</span><br>
                <span class="h2"><i class="bi bi-check-lg"></i>Vote pour le meilleur groupe</span><br>
                <span class="h2"><i class="bi bi-check-lg"></i>Consulte les resultats</span><br>
                <span class="h2"><i class="bi bi-check-lg"></i>Découvre des groupes</span><br>
            </div>
        </div>
        <div class="col-md-6">
            @include('auth.login-form')
        </div>
        @else
        <div class="row">
            <div class="container d-flex flex-column align-items-center text-center m-5">
            <span class="h2 "><i class="bi bi-check-lg"></i>Découvre les nominées</span><br>
                <span class="h2"><i class="bi bi-check-lg"></i>Vote pour le meilleur groupe</span><br>
                <span class="h2"><i class="bi bi-check-lg"></i>Consulte les resultats</span><br>
                <span class="h2"><i class="bi bi-check-lg"></i>Découvre des groupes</span><br>
            </div>
        </div>
        @endguest
        <div class="row">
            <div class="container d-flex flex-column align-items-center text-center m-5">
                <h3 class="h3">Vote pour  <span class="text-primary">élire</span> le <span class="text-primary">meilleur groupe de rock</span></h3>
                <div class="row">
                    <div class="col-md-4">
                        <img src="" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection