<div class="leftnav">
  <h1>SUCCESS STORIES</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/impact';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/impact') > -1) { ?>class="active"<?php } ?>><p>Our Impact</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2016results';" ><p>USA</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2016results';" class="subnav <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2016results') > -1) { ?> active<?php } ?>"><p>2016 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2015results';" class="subnav <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2015results') > -1) { ?> active<?php } ?>"><p>2015 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2014results';" class="subnav <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2014results') > -1) { ?> active<?php } ?>"><p>2014 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/2013results';" class="subnav <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/2013results') > -1) { ?> active<?php } ?>"><p>2013 Results</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/inspiration';" ><p>Worldwide</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/stories/inspiration';" class="subnav <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories/inspiration') > -1) { ?> active<?php } ?>"><p>Inspiration</p></li>
    <li onclick="javascript:window.open('http://www.dfcworld.com');" class="subnav"><p>DFC World</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="stories"]').find('a').addClass('active');
  });
</script>