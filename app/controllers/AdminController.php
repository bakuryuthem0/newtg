<?php

class AdminController extends BaseController {

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
		$title = "Administrador | Tecnographic Venezuela";
		return View::make('admin.index')
		->with('title',$title);
	}
	public function getLogin()
	{
		$title = "Administrador Iniciar sesión | Tecnographic Venezuela";
		return View::make('admin.login')
		->with('title',$title);
	}
	public function postLogin()
	{
		if (Request::ajax()) {
			$username = Input::get('username');
			$password = Input::get('password');
			if (Input::has('remember')) {
				$remember = Input::get('remember');
			}else
			{
				$remember = 0;
			}
			$data = array(
				'username' => $username,
				'password' => $password,
				'active'   => 1,
			);
			if(Auth::attempt($data, $remember)){
				$log = new Logs;
				$log->user_id = Auth::user()->id;
				$log->login = date('Y-m-d H:i:s',time());
				$log->save();

				return Response::json(array(
					'type' => 'success',
					'msg'  => 'Ha iniciado sesión satisfactoriamente, espere a que se le redirija.',
				));
			}

			return Response::json(array(
				'type' => 'danger',
				'msg'  => 'Usuario o contraseña incorrecta.',
			));
		}
	}
	public function getUserProfile()
	{
		$title = "Perfil de usuario | Tecnographic Venezuela";
		return View::make('admin.user.profile')
		->with('title',$title);
	}

	public function getLogout()
	{
		$log = Logs::where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();
		$log->logout = date('Y-m-d H:i:s',time());
		$log->save();
		Session::flash('success','Se ha cerrado sesión satisfactoriamente.');
		Auth::logout();
		return Redirect::to('administrador/login');
	}
}