@extends('layouts.app') 
@section('content')
<div class="login-form">
    <form action="index.html">
        <div class="top">
            <img src="img/profileimg.png" alt="icon" class="icon profile">
            <h1>Jonathan Doe</h1>
            <h4>Unlock Screen</h4>
        </div>
        <div class="form-area">
            <div class="group">
                <input type="password" class="form-control" placeholder="Password">
                <i class="fa fa-key"></i>
            </div>
            <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
    </form>
    <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
    </div>
</div>
@stop
