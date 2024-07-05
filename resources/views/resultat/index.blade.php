@extends('layouts.app')

@section('title')
Back-office - Laravel Online Store
@endsection

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto text-center">
        <h1>Resultats des <span class="text-primary">Awards</span></h1>
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <div class="container text-center pt-3 mb-3">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Formulaire -->
                                    <form method="POST" action="{{ route('votes.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" class="form-control" id="user_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="award_id">Selectionne l'award</label>
                                            <select name="award_id" class="form-control" id="award_id" required>
                                                @foreach($awards as $award)
                                                <option value="{{ $award->id }}">{{ $award->name_award }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rockband_id">selectionne ton groupe</label>
                                            <select name="rockband_id" class="form-control" id="rockband_id" required>
                                                @foreach($rockbands as $rockband)
                                                <option value="{{ $rockband->id }}">{{ $rockband->name_rockband }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <!--champs user_id invisible-->
                                            <input type="hidden" name="user_id" class="form-control" value="{{ request()->query('user_id') }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-4">
                                            Ajouter un vote
                                        </button>
                                    </form>
                                    <!-- Fin du formulaire -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center">

            <div class="container-fluid col-md-4 text-center">
                <div class="w-100 p-2 rounded-pill border bg-primary text-center mt-4">
                    <span class="text-light">nombre d'awards: {{ $awards->count() }}</span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 m-3 bg-primary rounded-3 mt-4">
                @foreach ($awards as $award)
                <div class="col">
                    <div class="card m-4 rounded-4">
                        <div class="card-body">
                            <h2 class="card-title text-primary">{{ $award->name_award }}</h2>
                            
                            <span>nombre de votes: {{ $votes->count() }}</span>
                            <h3 class="text-center">Les nominés</h3>
                            @foreach ($award->rockbands as $rockband)
                            <div class="container-fluid mt-1">
                                <div class="row">
                                    <div class="col-md-12">
                                    <span class="text-primary text-center">{{ $rockband->name_rockband }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endsection