<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Define model-policy mappings
    ];

    public function boot()
    {
        $this->registerPolicies();
        
        // Define additional gates and policies here
    }
}
