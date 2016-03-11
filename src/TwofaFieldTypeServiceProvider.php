<?php namespace Minioak\TwofaFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class TwofaFieldTypeServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $routes = [];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
        \App::register('PragmaRX\Google2FA\Vendor\Laravel\ServiceProvider');
    }

    public function map()
    {
    }

}
