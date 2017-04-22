@extends('layouts.app') 
@section('content')
<div class="login-form">
    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="top">
            <img src="img/kode-icon.png" alt="icon" class="icon">
            <h1>Kode</h1>
            <h4>Bootstrap Admin Template</h4>
        </div>
        <div class="form-area ">
            <div class="group {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required autofocus>
                <i class="fa fa-user"></i> @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> @endif
            </div>
            <div class="group {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                <i class="fa fa-key"></i> @if ($errors->has('password'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> @endif
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="checkbox"> Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
    <div class="footer-links row">
        <div class="col-xs-6"><a href="{{ url('/register') }}"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="{{ url('/password/reset') }}"><i class="fa fa-lock"></i> Forgot password</a></div>
    </div>
</div>
@stop
