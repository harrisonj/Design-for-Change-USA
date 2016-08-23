<div class="leftnav">
  <h1>WHO WE ARE</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/who/ourstory';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/who/ourstory') > -1) { ?>class="active"<?php } ?>><p>Our Story</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/who/aboutus';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/who/aboutus') > -1) { ?>class="active"<?php } ?>><p>About Us</p></li>    
    <li onclick="javascript:window.location.href = '/dfcusa/pages/who/partners';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/who/partners') > -1) { ?>class="active"<?php } ?>><p>Our Partners</p></li>
    <li class="hide" onclick="javascript:window.location.href = '/dfcusa/pages/who/media';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/who/media') > -1) { ?>class="active"<?php } ?>><p>Media Coverage</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/who/contactus';" <?php if ((strpos($_SERVER['REQUEST_URI'], '/pages/who/contactus') > -1) || (strpos($_SERVER['REQUEST_URI'], '/pages/who/press') > -1) || (strpos($_SERVER['REQUEST_URI'], '/pages/who/volunteer') > -1)) { ?>class="active"<?php } ?>><p>Contact Us</p></li>  
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="who"]').find('a').addClass('active');
  });
</script>