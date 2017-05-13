        <!-- START SIDEBAR -->
        <div class="sidebar clearfix">
            <ul class="sidebar-panel nav">
                <li class="sidetitle">MAIN</li>
                <li>
                    <a href="{{ url('/admin') }}"><span class="icon color5"><i class="fa fa-home"></i>
                    </span>Dashboard<span class="label label-default">2</span></a>
                </li>
                <li><a href="#"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>Mailbox<span class="label label-default">19</span></a></li>
                <li><a href="{{ url('/netdata') }}"><span class="icon color6"><i class="fa fa-line-chart"></i></span>Netdata</a></li>
                <li><a href="#"><span class="icon color9"><i class="fa fa-pencil"></i></span>Posts<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{ route('posts.index') }}">View Posts</a></li>
                        <li><a href="{{ route('posts.create') }}">New Post</a></li>
                        <li><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li><a href="{{ route('tags.index') }}">Tags</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="icon color9"><i class="fa fa-th"></i></span>Projects<span class="caret"></span></a>
                    <ul>
                        <li><a href="{{ route('projects.index') }}">View Projects</a></li>
                        <li><a href="{{ route('projects.create') }}">New Project</a></li>
                        <li><a href="{{ route('types.index') }}">Types</a></li>
                        <li><a href="{{ route('identities.index') }}">Identities</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END SIDEBAR -->
