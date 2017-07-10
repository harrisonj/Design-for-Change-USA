<div class="leftnav">
  <h1>GET STARTED</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/start/challenge';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/start/challenge') > -1) { ?>class="active"<?php } ?>><p>The Challenge</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/start/portal';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/start/portal') > -1) { ?>class="active"<?php } ?>><p>Web Portal</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/start/chapter';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/start/chapter') > -1) { ?>class="active"<?php } ?>><p>Start a Chapter</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/start/store';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/start/store') > -1) { ?>class="active"<?php } ?>><p>DFC Store</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="start"]').find('a').addClass('active');
  });
</script>