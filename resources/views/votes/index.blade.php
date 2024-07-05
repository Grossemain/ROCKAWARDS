@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <h1>Les <span class="text-primary">votes</span></h1>
    <div class="container-fluid col-md-4 text-center">
        <div class="w-100 p-2 rounded-pill border bg-primary text-center mt-4">
            <span class="text-light">nombre de vote: {{ $votes->count() }}</span>
        </div>
        <div class="container-fluid col-md-6 text-center mt-4">
            <a href="{{ route('votes.create') }}" class="btn btn-primary text-light">Nouveau vote</a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-3 bg-primary rounded-3 mt-4">
        @foreach ($votes as $vote)
        <div class="col">
            <div class="card m-4 rounded-4">
                <div class="card-body">
                    <h2 class="card-title text-primary">Nom du vote: {{ $vote->award->name_award }}</h2>
                    <p class="card-text">Nombre de vote : {{ $vote->count()}}</p>
                    <div class="container-fluid mt-4"> 
                        <div class="row mt-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection