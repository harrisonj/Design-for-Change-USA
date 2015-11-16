<div class="leftnav">
  <h1>WHAT IS DFC</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/about/whatwedo';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about/whatwedo') > -1) { ?>class="active"<?php } ?>><p>What We Do</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/about/whydfc';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about/whydfc') > -1) { ?>class="active"<?php } ?>><p>Why DFC?</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/about/ourstory';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about/ourstory') > -1) { ?>class="active"<?php } ?>><p>Our Story</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/about/aboutus';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about/aboutus') > -1) { ?>class="active"<?php } ?>><p>About Us</p></li>    
    <li onclick="javascript:window.location.href = '/dfcusa/pages/about/partners';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about/partners') > -1) { ?>class="active"<?php } ?>><p>Our Partners</p></li>
    <li class="hide" onclick="javascript:window.location.href = '/dfcusa/pages/about/media';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about/media') > -1) { ?>class="active"<?php } ?>><p>Media Coverage</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/about/contactus';" <?php if ((strpos($_SERVER['REQUEST_URI'], '/pages/about/contactus') > -1) || (strpos($_SERVER['REQUEST_URI'], '/pages/about/press') > -1) || (strpos($_SERVER['REQUEST_URI'], '/pages/about/volunteer') > -1)) { ?>class="active"<?php } ?>><p>Contact Us</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="about"]').find('a').addClass('active');
  });
</script>