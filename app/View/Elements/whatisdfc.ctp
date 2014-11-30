<div class="leftnav">
  <h1>WHAT IS DFC</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/whatisdfc/whatwedo';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/whatwedo') > -1) { ?>class="active"<?php } ?>><p>What We Do</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/whatisdfc/whydfc';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/whydfc') > -1) { ?>class="active"<?php } ?>><p>Why DFC?</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/whatisdfc/ourstory';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/ourstory') > -1) { ?>class="active"<?php } ?>><p>Our Story</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/whatisdfc/aboutus';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/aboutus') > -1) { ?>class="active"<?php } ?>><p>About Us</p></li>    
    <li onclick="javascript:window.location.href = '/dfcusa/pages/whatisdfc/partners';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/partners') > -1) { ?>class="active"<?php } ?>><p>Our Partners</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/whatisdfc/contactus';" <?php if ((strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/contactus') > -1) || (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/press') > -1) || (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc/volunteer') > -1)) { ?>class="active"<?php } ?>><p>Contact Us</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="whatisdfc"]').find('a').addClass('active');
  });
</script>