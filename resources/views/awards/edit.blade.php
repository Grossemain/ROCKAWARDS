@extends('layouts.admin')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Editer un award</h3>
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
                        <form method="POST" action="{{ route('awards.update', $award) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name_award">Nom de l'award</label>
                                <input type="text" name="name_award" class="form-control" value="{{ $award->name_award }}" required>
                            </div>
                            @foreach ($rockbands as $rockband)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="rockband{{ $rockband->id }}" value="{{ $rockband->id }}" id="rockband{{ $rockband->id }}"
                                 @if ($rockband->award()->where('award_id', $award->id)->exists()) checked @endif >
                                <label class="custom-control-label" for="rockband{{ $rockband->id }}">{{ $rockband->name_rockband }}</label>
                            </div>
                            @endforeach
                            <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-4">
                                mettre a jour
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