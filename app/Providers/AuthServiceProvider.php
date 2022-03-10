<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Article::class => ArticlePolicy::class,
        'App\Models\Article' => 'App\Models\ArticlePolicy',
        'App\Models\Comment' => 'App\Models\CommentPolicy',
        'App\Models\Tag' => 'App\Models\TagPolicy',
        'App\Models\User' => 'App\Models\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
