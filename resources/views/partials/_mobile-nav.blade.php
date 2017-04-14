<nav class="mobile-nav ">
    <ul class="slimmenu font2">
        <li class="{{ Request::path() ==  '/' ? 'activelink' : ''  }}">
            <a href="{{ url('/') }}"></i>Home</a>
        </li>
        <li class="{{ Request::path() ==  'about' ? 'activelink' : ''  }}">
            <a href="{{ url('about') }}"></i>About</a>
        </li>
        <li class="{{ Request::path() ==  'work' ? 'activelink' : ''  }}">
            <a href="{{ url('works') }}"></i>Work</a>
        </li>
        <li class="{{ Request::path() ==  'news' ? 'activelink' : ''  }}">
            <a href="{{ url('news') }}"></i>News</a>
        </li>
        <li class="{{ Request::path() ==  'contact' ? 'activelink' : ''  }}">
            <a href="{{ url('contact') }}"></i>Contact</a>
        </li>
        <li class="{{ Request::path() ==  'quote' ? 'activelink' : ''  }}">
            <a href="{{ url('quote') }}"></i>Request a quote</a>
        </li>
    </ul>
</nav>
