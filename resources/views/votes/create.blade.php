@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3> Ajouter un vote</h3>
                        
                        <!-- Message d'information -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <!-- Formulaire -->
                        <form method="POST" action="{{ route('votes.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name_vote">Nom du vote</label>
                                <input type="text" name="name_vote" class="form-control" id="name_vote" required>
                            </div>
                            <div class="form-group">
                                <label for="vote_award">Selectionne l'award</label>
                                <select name="vote_award" class="form-control" id="vote_award" required>
                                    @foreach($awards as $award)
                                        <option value="{{ $award->id }}">{{ $award->name_award }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_rockband">selectionne ton groupe</label>
                                <select name="id_rockband" class="form-control" id="id_rockband" required>
                                    @foreach($rockbands as $rockband)
                                        <option value="{{ $rockband->id }}">{{ $rockband->name_rockband }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <!--champs id_user invisible-->
                                <input type="hidden" name="id_user" class="form-control" value="{{ request()->query('id_user') }}">
                            </div>
                            <div class="form-group mb-4">
                                <!--champs id_award invisible-->
                                <input type="hidden" name="id_award" class="form-control" value="{{ $award->id }}">
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
@endsection
