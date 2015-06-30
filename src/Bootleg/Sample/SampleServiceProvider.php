<?php namespace Bootleg\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function __construct($app) {
        parent::__construct($app);           

        /*        
        ===
        Uncomment this is you to use routes.php file
        ===
        if (!\App::runningInConsole()){
            \Event::listen('routes.before', function(){
                include __DIR__.'/../../routes.php';
            });
        } 
        */
    }


    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        /*        
        ===
        Example of using the menu.links hook
        ===
        \Event::listen('menu.links', function(){
            return array (
                'activePattern'=>"blog/*",
                'icon'=>'glyphicon-book',
                'title'=>'Blog',
                'location'=>'\Bootleg\Blog\PostController@anyIndex'
            );
        });
        */
       

        //publishes the assets
        $this->publishes([__DIR__.'/../../../public' => public_path('packages/mikthemes/sample')], 'public');

        //publish the migrations:
        $this->publishes([__DIR__.'/../../migrations/' => public_path('../database/migrations')], 'migrations');

        //publish the config.
        //$this->publishes([__DIR__.'/../../config/geodatabase.php' => config_path('geodatabase.php')]); //config

        //Load views
        $this->loadViewsFrom(__DIR__.'/../../views', 'sample');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
