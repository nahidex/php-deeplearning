<?php
namespace Ace\Middleware;

use Slim\Middleware;

class BeforeMiddleware extends Middleware
{


    /**
     * Call
     *
     * Perform actions specific to this middleware and optionally
     * call the next downstream middleware.
     */
    public function call()
    {
        $this->app->hook('slim.before', [$this, 'run']);
        $this->next->call();
    }

    public function run()
    {
        if (isset($_SESSION[$this->app->config->get('auth.session')])) {
            $this->app->auth = $this->app->user->where('id', $_SESSION[$this->app->config->get('auth.session')])->first();

        }
    }
}
