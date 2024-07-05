@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <h1>Award du {{$award->name_award}} <span class="text-primary"></span></h1>
    @if(auth()->user() && auth()->user()->isAdmin())
    <div class="container-fluid col-md-6 text-center mt-4">
        <a href="{{ route('awards.create') }}" class="btn btn-primary text-light">Nouveau Award</a>
    </div>
    @else
    @endif
    <div class="container-fluid col-md-6 text-center bg-tertiary rounded-3 mt-4 border border-3 border-primary">
        <div class="col">
            <div class="card m-4 rounded-4">
                <div class="card-body text-center">
                    <h2 class="card-title">{{$award->name_award}}</h2>
                    @if(auth()->user() && auth()->user()->isAdmin())
                    <div class="container-fluid">
                        <div class="row">
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
                    @else
                    @endif
                    <h4>Les nominées sont : </h4>
                    @foreach ($award->rockbands as $rockband)
                    <ul>
                        <li>{{ $rockband->name_rockband }}</li>
                    </ul>
                    @endforeach
                    <div class="container-fluid col-md-6 text-center mt-4">
                        <a href="/votes/create" class="btn btn-primary text-light">Voter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection