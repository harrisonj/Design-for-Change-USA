<div class="leftnav">
  <h1>GET STARTED</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/getstarted/portal';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted/portal') > -1) { ?>class="active"<?php } ?>><p>Web Portal</p></li>
    <li onclick="javascript:window.location.href = 'http://portal.designforchange.us/dfcusa-pm/pages/login#register';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted/register') > -1) { ?>class="active"<?php } ?>><p>Register</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa-pm/pages/login';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted/login') > -1) { ?>class="active"<?php } ?>><p>Login</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/getstarted/resources';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted/resources') > -1) { ?>class="active"<?php } ?>><p>Additional Resources</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="getstarted"]').find('a').addClass('active');
  });
</script>