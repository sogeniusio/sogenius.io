<section class="social-buttons">
  <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('news/' . $post->slug) }}"
     target="_blank">
     <i class="fa fa-facebook-official"></i>
  </a>
  <a href="https://twitter.com/intent/tweet?url={{ url('news/' . $post->slug) }}"
     target="_blank">
      <i class="fa fa-twitter-square"></i>
  </a>
  {{-- <a href="https://plus.google.com/share?url={{ url('news/' . $post->slug) }}"
     target="_blank">
     <i class="fa fa-google-plus-square"></i>
  </a> --}}
  {{-- {{dd($post->slug)}} --}}
  <a href="https://pinterest.com/pin/create/button/?{{
      http_build_query([
          'url' =>  url('news/' . $post->slug),
          'media' => url('/pinterest-atom.jpg'),
          'description' => 'Check out this article on So Genius I/O at ' . url('news/' . $post->slug)
      ])
      }}" target="_blank">
      <i class="fa fa-pinterest-square"></i>
  </a>


</section>
