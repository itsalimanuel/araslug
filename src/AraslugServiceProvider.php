<?php
namespace Alik\Araslug;

use Illuminate\Support\ServiceProvider;

class AraSlugServiceProvider extends ServiceProvider{


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('slug', function($app){
            return new Slug();
        });
	}

}