@if (Auth::guest())

@else
  <div class="hidden-sm hidden-xs text-right admin-link-area navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div style="margin-top: 10px;" class="col-lg-12">
          <ul class="list-inline">
            <li><a href="{{ route('posts.index') }}">News/Posts</a></li>
            <li><a href="{{ route('projects.index') }}">Works/Projects</a></li>
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endif
