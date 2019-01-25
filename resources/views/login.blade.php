@extends('layouts.master')


@section('content')
<div class="container p-5 footerLogin">
        <div class="row justify-content-center align-items-center ">
            <div  class="col-md-6">
                <div id="login-border" class="login-box col-md-12   p-5">
                    <form class="form" action="{{action('HomeController@index')}}" method="post">
                        <h3 class="text-center text-success">LOGIN</h3>
                        <div class="form-group">
                            <label for="email" class="text-success">Email:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-success">Contraseña:</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-success"><span>¿Has olvidado la contraseña?</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-light btn-md border border-dark" value="Enviar">
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
