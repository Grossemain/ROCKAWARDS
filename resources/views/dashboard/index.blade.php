@extends('layouts.admin')

@section('title')
Back-office - Laravel Online Store
@endsection

@section('content')

<div class="container text-center pt-3 mb-3">
    <h1 class="pb-5">Dashboard</h1>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam exercitationem blanditiis aliquid hic magnam maiores recusandae dolorem voluptatem quibusdam nobis ut veritatis cupiditate suscipit praesentium commodi tenetur, ipsa velit quae?</p>


    <div class="container-fluid border border-primary">
        <div class="row">

            <!-- Créer un Rockband -->

            <div class="container w-50 p-5" id="">
                <h3>Créer un Rockband</h3>
                <form method="post" action="{{ route('rockbands.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name_rockband">nom</label>
                        <input required type="text" class="form-control" name="name_rockband" value="" id="name_rockband">
                    </div>
                    <div class="form-group">
                                <fieldset>
                                    <legend>Nominations</legend>
                                    <div>
                                        @foreach($awards as $award)
                                        <input type="checkbox" name="name_award{{ $award->id }}" id="name_award" value="{{ $award->id }}" autocomplete="off">
                                        <label for="award_id">{{ $award->name_award }}</label><br>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>
                    <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-4">Valider</button>
                </form>
            </div>

            <!-- Créer un award -->

            <div class="container w-50 p-5" id="">
                <h3>Créer un Award</h3>
                <form method="post" action="{{ route('awards.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name_award">nom</label>
                        <input required type="text" class="form-control" name="name_award" value="" id="name_award">
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Veuillez nominer les groupes</legend>
                            <div>
                                @foreach($rockbands as $rockband)
                                <input type="checkbox" name="name_rockband{{ $rockband->id }}" id="name_rockband" value="{{ $rockband->id }}" autocomplete="off">
                                <label for="rockband_id">{{ $rockband->name_rockband }}</label><br>
                                @endforeach
                            </div>
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill shadow-sm mt-4">Valider</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Liste des Rockbands -->

    <div class="container p-5" id="">
        <h3 class="mb-3">Liste des Rockbands</h3>

        <table class="table table-primary">
            <thead class="thead-dark">
                <th>Nom</th>
                <th>modifier</th>
                <th>supprimer</th>
            </thead>
            @foreach ($rockbands as $rockband)
            <tr>
                <td>{{ $rockband->name_rockband}}</td>
                <td><a href="{{ route('rockbands.edit', $rockband) }}"><button class="btn btn-primary btn-s mb-4 text-light">Modifier</button></a></td>
                <td>
                    <form method="post" action="{{ route('rockbands.destroy', $rockband) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-s" type=" submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Liste des awards -->

    <div class="container p-5" id="">
        <h3 class="mb-3">Liste des awards</h3>

        <table class="table table-primary">
            <thead class="thead-dark">
                <th>Nom</th>
                <th>modifier</th>
                <th>supprimer</th>
            </thead>
            @foreach ($awards as $award)
            <tr>
                <td>{{ $award->name_award}}</td>
                <td><a href="{{ route('awards.edit', $award) }}"><button class="btn btn-primary btn-s mb-4 text-light">Modifier</button></a></td>
                <td>
                    <form method="post" action="{{ route('awards.destroy', $award) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-s" type=" submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</div>



<!-- Liste des utilisateurs -->

<div class="container p-5" id="">
    <h3 class="mb-3">Liste des utilisateurs</h3>

    <table class="table table-primary">
        <thead class="thead-dark">
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>zip_code</th>
            <th>city</th>
            <th>e-mail</th>
            <th>rôle</th>
            <th>supprimer</th>
        </thead>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->street_name }}</td>
            <td>{{ $user->zip_code}}</td>
            <td>{{ $user->city}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role_id}}</td>
            <td>
                <form method="post" action="{{ route('user.delete') }}">
                    @csrf
                    @method('delete')
                    <input type="hidden" value="{{ $user->id }}" name="user_id">
                    <button class="btn btn-danger btn-s" type=" submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection