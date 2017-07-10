<div class="leftnav">
  <h1>WHAT WE DO</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/what/whatwedo';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/what/whatwedo') > -1) { ?>class="active"<?php } ?>><p>What We Do</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/what/whydfc';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/what/whydfc') > -1) { ?>class="active"<?php } ?>><p>Why DFC?</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/what/faq';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/what/faq') > -1) { ?>class="active"<?php } ?>><p>FAQ</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/what/fids';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/what/fids') > -1) { ?>class="active"<?php } ?>><p>FIDS Framework</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="what"]').find('a').addClass('active');
  });
</script>