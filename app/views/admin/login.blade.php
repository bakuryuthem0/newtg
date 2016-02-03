@extends('layouts.admin')

@section('content')

<div class="login-box">
      <div class="login-logo logo-login">
        <a href="../../index2.html"><b>Sistema de administracion de Tecnographic Venezuela</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar Sesión</p>
        <div class="alert responseAjax @if(Session::has('success')) alert-success active @endif">
          <p>@if(Session::has('success')) {{ Session::get('success') }} @endif</p>
        </div>
        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            <label class="control-label label-control-success hidden" for="inputSuccess"><i class="fa fa-check"></i></label>
            <label class="control-label label-control-danger hidden" for="inputError"><i class="fa fa-times-circle-o"></i> Se necesita el usuario</label>
            <label class="control-label label-control-response-danger hidden" for="inputError"><i class="fa fa-times-circle-o"></i> Usuario o contraseña incorrectos</label>
            <input type="email" name="email" class="form-control email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label label-control-success hidden" for="inputSuccess"><i class="fa fa-check"></i> </label>
            <label class="control-label label-control-danger hidden" for="inputError"><i class="fa fa-times-circle-o"></i> Se necesita la contraseña</label>
            <input type="password" name="password" class="form-control password" placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" class="remember" value="1"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
          </div>
          {{ Form::token() }}
        </form>
        <div class="row">
          <div class="col-xs-8 pull-right">
            <button type="submit" class="btn btn-primary btn-block btn-flat logMeIn">Iniciar Sesión</button>
          </div><!-- /.col -->
          <div class="col-xs-2 pull-right no-padding"><img src="{{ asset('images/loader.gif') }}" class="pull-right miniLoader"></div>
        </div>

        <a href="#">Olvide mi contraseña</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@stop