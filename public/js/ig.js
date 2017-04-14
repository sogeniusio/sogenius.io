var userFeed = new Instafeed({
  get: 'tagged',
  userId: '14140742',
  accessToken: '14140742.ba4c844.209370bca67d4d89b7e3e2f4a735418d',
  tagName: 'craftsbygee',
  limit: 6,
  sortBy: 'most-liked',
  resolution: 'standard_resolution',
  template: '<a class="l-fluidbox" data-aos="zoom-in-up" data-aos-offset="150" href="{{image}}"><img src="{{image}}" /></a>',
  after: function() {
    var images = $("#instafeed a").fluidbox();
      AOS.init();
  },
});

userFeed.run();
