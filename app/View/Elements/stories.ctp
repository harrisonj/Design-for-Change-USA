<div class="leftnav">
  <h1>SUCCESS STORIES</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2015results';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2015results') > -1) { ?>class="active"<?php } ?>><p>2015 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2014results';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2014results') > -1) { ?>class="active"<?php } ?>><p>2014 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2013results';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2013results') > -1) { ?>class="active"<?php } ?>><p>2013 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/inspiration';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/inspiration') > -1) { ?>class="active"<?php } ?>><p>Inspiration Worldwide</p></li>
    <li onclick="javascript:window.open('http://www.dfcworld.com');"><p>Design for Change World</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="stories"]').find('a').addClass('active');
  });
</script>