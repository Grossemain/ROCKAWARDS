@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3> Ajouter un Award</h3>

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
                        <form method="POST" action="{{ route('awards.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name_award">Nom de l'award</label>
                                <input type="text" name="name_award" class="form-control" id="name_award" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id_award" class="form-control" id="id_award" value="{{ request()->query('id_award') }}">
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <legend>Veuillez nominer les groupes</legend>
                                    <div>
                                        @foreach($rockbands as $rockband)
                                        <input type="checkbox" name="name_rockband{{ $rockband->id }}" id="name_rockband" value="{{ $rockband->id }}" autocomplete="off">
                                        <label for="id_rockband">{{ $rockband->name_rockband }}</label><br>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-4">
                                Ajouter un award
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