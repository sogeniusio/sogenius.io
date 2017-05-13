@extends('admin2')

@section('title', '| Profile')

@section('stylesheets')

<style>
	div.row.presentation {
		display:none;
	}
</style>

@endsection

@section('content')
<div class="container-no-padding">

  <div class="social-profile">

    <!-- Start Top -->
    <div class="social-top">

      <div class="profile-left">
        <img src="/uploads/avatars/{{ $avatar }}" alt="img" class="profile-img">
        <h1 class="name">{{ $firstname }} {{ $lastname }}</h1>
        <p class="profile-text">There can be no thought of finishing...</p>
      </div>

    <ul class="social-stats">
      <li><b>16</b>followers</li>
      <li><b>123</b>photos</li>
      <li><b>523</b>videos</li>
    </ul>

    </div>
    <!-- End Top -->

    <!-- Start Social Content -->
    <div class="social-content clearfix">



    </div>
    <!-- End Social Content -->


  </div>

</div>

@endsection
@section('scripts')
@endsection
