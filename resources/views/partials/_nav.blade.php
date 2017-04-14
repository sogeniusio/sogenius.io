
<header class="masthead">
    <div class="container">
        <div class="row">
            <!-- <article class="col-md-3">
              <a href="index.html"><img alt="" title="" class="main-logo " src="images/logo.png"></a>
            </article> -->
            <article class="col-md-6 text-left no-pad">
                <nav class="mastnav ">

                    <ul class="main-menu ">

                        <li class="{{ Request::path() ==  '/' ? 'activelink' : ''  }} main-link font2">
                            <a href="{{ url('/') }}"></i>Home</a>
                        </li>
                        <li class="{{ Request::path() ==  'about' ? 'activelink' : ''  }} main-link font2">
                            <a href="{{ url('about') }}"></i>About</a>
                        </li>
                        <li class="{{ Request::path() ==  'works' ? 'activelink' : ''  }} main-link font2">
                            <a href="{{ url('works') }}"></i>Works</a>
                        </li>
                        <li class="{{ Request::path() ==  'news' ? 'activelink' : ''  }} main-link font2">
                            <a href="{{ url('news') }}"></i>News</a>
                        </li>
                        <li class="{{ Request::path() ==  'contact' ? 'activelink' : ''  }} main-link font2">
                            <a href="{{ url('contact') }}"></i>Contact</a>
                        </li>

                    {{-- {{ Html::linkRoute('pages.about', 'About', array(), array('class' => 'main-link font1 sub-menu-trigger activelink')) }} --}}

                    {{-- <a class="main-link font1 sub-menu-trigger activelink" href="#">About</a> --}}
                    {{-- <div class="sub-menu font1">
                        <a href="index.html">Portfolio</a>
                        <a href="index02.html">Slider</a>
                    </div> --}}
                    {{-- <li>

                        <a class="main-link font2 sub-menu-trigger" href="work.html">Work</a>
                        <!-- <div class="sub-menu font1">
                            <a href="works.html">2 col</a>
                            <a href="works02.html">3 col</a>
                            <a href="works03.html">4 col</a>
                        </div> -->
                    </li> --}}

                    {{-- <li>
                        <a class="main-link font2 sub-menu-trigger" href="posts.html">Posts</a>
                        <!-- <div class="sub-menu font1">
                            <a href="about01.html">Studio</a>
                            <a href="about02.html">Personal</a>
                            <a href="elements.html">Elements</a>
                            <a href="news.html">News List</a>
                            <a href="post.html">News Post</a>
                        </div> -->
                    </li> --}}
                    <!-- <li>

                    <a class="main-link font1 sub-menu-trigger" href="#">Project</a>
                    <div class="sub-menu font1">
                        <a href="project01.html">Slider</a>
                        <a href="project02.html">Video</a>
                        <a href="project03.html">Parallax</a>
                    </div>
                </li> -->
                    </ul>
                </nav>
            </article>
            <!-- WORKS FILTER -->

        @yield('works-filter')

        <!-- END WORKS FILTER -->
        </div>
    </div>
</header>
