<div class="leftnav">
  <h1>SUBMIT PROJECTS</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/getstarted/start';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted/start') > -1) { ?>class="active"<?php } ?>><p>Start Here</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/getstarted/inspiration';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted/inspiration') > -1) { ?>class="active"<?php } ?>><p>Inspiration</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="getstarted"]').find('a').addClass('active');
  });
</script>