<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$title = "Titulo | Nombre";
		if (Request::ajax()) {
			return View::make('partials.home')
			->with('title',$title);
		}else
		{
			return View::make('home.index')
			->with('title',$title)
			->with('active','index');
		}
	}
	public function getHome()
	{
		$title = "Titulo | Nombre";
		if (Request::ajax()) {
			return View::make('partials.home')
			->with('title',$title);
		}else
		{
			return View::make('home.index')
			->with('title',$title)
			->with('active','index');
		}
	}
	public function getServices()
	{
		$title = "Titulo | Nombre";
		if (Request::ajax()) {
			return View::make('partials.services')
			->with('title',$title);
		}else
		{
			return View::make('home.services')
			->with('title',$title)
			->with('active','services');
		}
	}
	public function getProject()
	{
		$title = "Titulo | Nombre";
		if (Request::ajax()) {
			return View::make('partials.project')
			->with('title',$title);
		}else
		{
			return View::make('home.project')
			->with('title',$title)
			->with('active','project');
		}
	}
	public function getContact()
	{
		$title = "Titulo | Nombre";
		if (Request::ajax()) {
			return View::make('partials.contact')
			->with('title',$title);
		}else
		{
			return View::make('home.contact')
			->with('title',$title)
			->with('active','contact');
		}
	}
}
