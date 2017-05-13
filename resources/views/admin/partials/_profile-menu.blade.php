        <li class="dropdown link">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox">
                <img src="/img/profileimg.png" alt="img">
                <b>Hello, {{ Auth::user()->firstname }}</b>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
                <li role="presentation" class="dropdown-header">Profile</li>
                <li><a href="{{ url('/admin/profile') }}"><i class="fa falist fa-user"></i> View Profile</a></li>
                <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">4</span></a></li>
                <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
                <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
                <li>
                    <i class="fa falist fa-power-off"></i>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                                        
            </ul>
        </li>