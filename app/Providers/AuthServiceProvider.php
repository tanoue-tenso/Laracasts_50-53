<?php

namespace App\Providers;

use App\Conversation;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // memo: $conversationの投稿者がログインユーザー($user)のときtrueを返す
        // =>　追記: Policyに定義
        // Gate::define('update-conversation', function(User $user, Conversation $conversation) {
        //     return $conversation->user->is($user);
        // });
    }
}
