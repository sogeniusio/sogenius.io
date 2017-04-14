<h4 class="sub-heading  white black-bg font2bold">News</h4>
<p class="dark add-bottom-quarter">Providing a unique online meeting place to keep up to date on tech news, share knowledge and experiences with peers, improve skills with training and educational resources, and, of course, exchange tools, tips and advice.</p>
{{-- <h4 class="sub-heading  white black-bg ffont4bold add-top-half">Latest Posts</h4> --}}
{{-- <ul class="content-list">
  @foreach ($posts_by_date as $date => $posts)
    <li><a href="{{ url('news/' . $post->slug) }}">{{ $post->title }} <span class="glyphicon glyphicon-chevron-right"></span></a> <br /> <span class="post-date">{{ date('F d, Y', strtotime($post->created_at)) }}</span></li>
  @endforeach --}}
<h4 class="sub-heading  white black-bg font2bold add-top-half">Latest Posts</h4>
{{-- @foreach ($posts_by_date as $date => $posts)
    @foreach ($posts as $post)
      <span class="post-date">{{ $date }} </span><a href="{{ url('news/' . $post->slug) }}">{{ trim($post->title, " ") }}</a><br />
    @endforeach
@endforeach --}}
                    {{-- <ul class="content-list">

  <li><span>2015 February</span></li>
  <li><span>2015 January</span></li>
  <li><span>2014 December</span></li>
</ul> --}}
