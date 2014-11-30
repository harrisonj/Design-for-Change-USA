<div class="leftnav">
  <h1>RESOURCES</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/resources/documents';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/resources/documents') > -1) { ?>class="active"<?php } ?>><p>Documents</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/resources/faq';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/resources/faq') > -1) { ?>class="active"<?php } ?>><p>FAQ</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="resources"]').find('a').addClass('active');
  });
</script>