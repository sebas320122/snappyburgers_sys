<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    // Establecer autorizaciones
    public function boot(): void
    {
        // Operaciones en vista Disponibilidad
        Gate::define('tablaDisponibilidad', function (User $user) {
            return $user->rol == 'Gerente';
        });

        // Operaciones en vista Proveedores
        Gate::define('tablaProveedores', function (User $user) {
            return $user->rol == 'Gerente';
        });

        // Operaciones en vista Items
        Gate::define('tablaItems', function (User $user) {
            return $user->rol == 'Gerente';
        });

        // Operaciones en vista Ingresos
        Gate::define('tablaIngresos', function (User $user) {
            return $user->rol == 'Gerente';
        });

        // Operaciones en vista Empleados
        Gate::define('tablaEmpleados', function (User $user) {
            return $user->rol == 'Gerente';
        });
    }
}
