<?php

namespace Master\Rooms\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
	protected $namespace = 'Master\Rooms\Http\Controllers';

	public function boot()
	{
		parent::boot();
		if (Request::is('*/rooms/edit/*') || Request::is('*/rooms/delete/*')) {
			Route::bind('id', function ($id) {
				$model = $this->app->make('Master\Rooms\Interfaces\RoomsRepositoryInterface');
				return $model->find($id);
			});
		}

		if (Request::is('*/ameneties/edit/*') || Request::is('*/ameneties/delete/*')) {
			Route::bind('id', function ($id) {
				$model = $this->app->make('Master\Rooms\Interfaces\AmenetiesRepositoryInterface');
				return $model->find($id);
			});
		}

		if (Request::is('*/types/edit/*') || Request::is('*/types/delete/*')) {
			Route::bind('id', function ($id) {
				$model = $this->app->make('Master\Rooms\Interfaces\TypesRepositoryInterface');
				return $model->find($id);
			});
		}

		if (Request::is('*/locations/edit/*') || Request::is('*/locations/delete/*')) {
			Route::bind('id', function ($id) {
				$model = $this->app->make('Master\Rooms\Interfaces\LocationsRepositoryInterface');
				return $model->find($id);
			});
		}

		if (Request::is('*/owners/edit/*') || Request::is('*/owners/delete/*')) {
			Route::bind('id', function ($id) {
				$model = $this->app->make('Master\Rooms\Interfaces\OwnersRepositoryInterface');
				return $model->find($id);
			});
		}
	}

	public function map()
	{
		$this->mapWebRoutes();
	}

	protected function mapWebRoutes()
	{
		Route::group([
		'namespace'  => $this->namespace,
		], function ($route) {
			require (__DIR__ . '/../../routes/web.php');
		});
	}

}
