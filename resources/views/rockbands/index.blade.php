@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <h1>Les <span class="text-primary">groupes de rock</span></h1>
    <div class="container-fluid col-md-4 text-center">
        <div class="w-100 p-2 rounded-pill border bg-primary text-center mt-4">
            <span class="text-light">nombre de groupes: {{ $rockbands->count() }}</span>
        </div>
        @if(auth()->user() && auth()->user()->isAdmin())
        <div class="container-fluid col-md-6 text-center mt-4">
            <a href="{{ route('rockbands.create') }}" class="btn btn-primary text-light">Nouveau groupe</a>
        </div>
        @else
        @endif
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 m-3 rounded-3 mt-4">
        @foreach ($rockbands as $rockband)
        <div class="col">
            <div class="card m-4 rounded-4">
                <div class="card-body">
                    <h2 class="card-title text-primary"> <a class="text-decoration-none" href="{{ route('rockbands.show', ['rockband' => $rockband->id]) }}">{{ $rockband->name_rockband }}</a></h2>

                    @foreach ($rockband->awards as $award)
                    <ul>
                        <li>{{ $award->name_award }}</li>
                    </ul>
                    @endforeach
                    @if(auth()->user() && auth()->user()->isAdmin())
                    <div class="container-fluid mt-4">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <a href="{{ route('rockbands.edit', ['rockband' => $rockband->id]) }}" class="btn btn-primary btn-s mb-4 text-light">Editer</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('rockbands.destroy', ['rockband' => $rockband->id]) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-s" type=" submit">Supprimer</button>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection