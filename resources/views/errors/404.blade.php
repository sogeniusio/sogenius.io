@extends('error')

@section('title', ' Page not found')

@section('stylesheets')

  <style media="screen">

  .error-number {
    font-size: 200px;
    font-family: 'Abel', sans-serif;
    font-weight: 900;
  }

  .error-message {
    font-size: 16px;
    font-weight: light;
    font-family: 'Roboto', sans-serif
    padding: 10px;
  }

  .error-message span {
    font-weight: 200;
  }

  .btn-group {
    margin: 30px 0;
    border: 1px solid #f1eff7;
    font-weight: 900;
    color: #131313;
  }

  .btn:hover {
    color: #b40404;
  }



  </style>

@endsection

@section('content')

  <div class="col-md-12 page-wrap">

      <article class=" text-center">
        <h1 class="error-number">404</h1>
        <h2 class="error-message">Error:<span> The requested page</span> {{ $_SERVER['REQUEST_URI'] }} <span>was not found on this server.</span></h2>

        <div class="row">
          <div class="col-lg-12">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-oscar">Go back</button>
              <button type="button" class="btn btn-oscar">Return home</button>
              <button type="button" class="btn btn-oscar">Close page</button>
            </div>
          </div>
        </div>
      </article>  </div>





@endsection

@section('scripts')


@endsection
