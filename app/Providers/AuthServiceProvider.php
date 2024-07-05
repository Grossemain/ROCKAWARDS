<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // je définis mon Gate en lui donnant un nom et en précisant les conditions
        // la fonction prend en paramètre le user connecté
        // 1er gate : vérifie que le user est admin pour accéder au back-office
        Gate::define('access_backoffice', function ($user) {

            return $user->isAdmin(); //condition à satisfaire pour passer le gate
            // autre syntaxe
            // if ($user->isAdmin()) {
            //     return true;
            // } else {
            //     return false;
            // }
        });

        // 2ème gate : vérifie que le user est connecté pour pouvoir accéder à la validation de commande
        Gate::define('access_order_validation', function () {
            return Auth::user();
        });
    }
}
