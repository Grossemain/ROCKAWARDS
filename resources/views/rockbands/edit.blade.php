@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                        <h3>Editer un groupe</h3>
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
                       <form method="POST" action="{{ route('rockbands.update', ['rockband' => $rockband->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name_rockband">Nom du groupe</label>
                                <input type="text" name="name_rockband" class="form-control" value="{{ $rockband->name_rockband }}" required>
                            </div>

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