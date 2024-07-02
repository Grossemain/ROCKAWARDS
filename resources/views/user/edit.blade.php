@extends ('layouts/app')
@section('title')
Réseau Social Laravel - Mon compte
@endsection
@section('content')
<div class="container">
    <h1>Mon compte</h1>
    <h3 class="pb-3">Modifier mes informations </h3>
    <div class="row">
        <form class="col-4 mx-auto" action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nouveau nom</label>
                <input required type="text" class="form-control" placeholder="modifier" name="name" value="{{ $user->name }}" id="name">
            </div>
            <div class="form-group">
                <label for="email">Nouveau mail</label>
                <input required type="email" class="form-control" placeholder="modifier" name="email" value="{{ $user->email }}" id="email">
            </div>
            <div class="form-group">
                <label for="password">Nouveau mot de passe</label>
                <input required type="password" class="form-control" placeholder="modifier" name="password" value="{{ $user->password }}" id="password">
            </div>
            <div class="form-group">
                <label for="surname">Nouveau prenom</label>
                <input required type="text" class="form-control" placeholder="modifier" name="surname" value="{{ $user->surname }}" id="surname">
            </div>
            <div class="form-group">
                <label for="street_name">Nouvelle adresse</label>
                <input required type="text" class="form-control" placeholder="modifier" name="street_name" value="{{ $user->street_name }}" id="street_name">
            </div>
            <div class="form-group">
                <label for="zip_code">Nouveau code postal</label>
                <input required type="text" class="form-control" placeholder="modifier" name="zip_code" value="{{ $user->zip_code }}" id="zip_code">
            </div>
            <div class="form-group">
                <label for="city">Nouvelle ville</label>
                <input required type="text" class="form-control" placeholder="modifier" name="city" value="{{ $user->city }}" id="city">
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>
@endsection