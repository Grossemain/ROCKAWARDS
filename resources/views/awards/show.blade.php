@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
    <h1>{{$award->name_award}} <span class="text-primary"></span></h1>
    <div class="container-fluid col-md-6 text-center mt-4">
        <a href="{{ route('awards.create') }}" class="btn btn-primary text-light">Nouveau Award</a>
    </div>
    <div class="container-fluid col-md-6 text-center bg-tertiary rounded-3 mt-4 border border-3 border-primary">
        <div class="col">
            <div class="card m-4 rounded-4">
                <span>{{$award->id}}</span>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection