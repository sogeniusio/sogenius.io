<nav class="mobile-nav ">
    <ul class="slimmenu font2">
        <li class="{{ Request::path() ==  '/' ? 'activelink' : ''  }}">
            <a href="{{ url('/') }}"></i>Home</a>
        </li>

        <li class="{{ Request::path() ==  'about' ? 'activelink' : ''  }}">
            <a href="{{ url('about') }}"></i>About</a>
        </li>

        <li class="{{ Request::path() ==  'work' ? 'activelink' : ''  }}">
            <a href="{{ url('work') }}"></i>Work</a>
        </li>

        <li>
            <a href="work.html">Work</a>
        </li>
        <li>
            <a href="posts.html">Posts</a>
        </li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
