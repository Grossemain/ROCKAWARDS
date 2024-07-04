@extends('layouts.admin')
@section('content')
<div class="container-fluid text-center">
    <h1>Les <span class="text-primary">Awards</span></h1>
    <div class="container-fluid col-md-4 text-center">
        <div class="w-100 p-2 rounded-pill border bg-primary text-center mt-4">
            <span class="text-light">nombre d'awards: {{ $awards->count() }}</span>
        </div>
        <div class="container-fluid col-md-6 text-center mt-4">
            <a href="{{ route('rockbandsawards.create') }}" class="btn btn-primary text-light">Nouveau Award</a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-3 bg-primary rounded-3 mt-4">
        @foreach ($awards as $award)
        <div class="col">
            <div class="card m-4 rounded-4">
                <div class="card-body">
                    <h2 class="card-title text-primary">{{ $award->name_award }}</h2>
                    @foreach ($award->rockbands as $rockband)
                    <ul>
                        <li>{{ $rockband->name_rockband }}</li>
                    </ul>
                    @endforeach
                    <div class="container-fluid mt-4">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <a href="{{ route('awards.edit', ['award' => $award->id]) }}" class="btn btn-primary btn-s mb-4 text-light">Editer</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('awards.destroy', ['award' => $award->id]) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-s" type=" submit">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection