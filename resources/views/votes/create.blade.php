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
@endsection
