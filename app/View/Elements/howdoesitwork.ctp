<div class="leftnav">
  <h1>HOW DOES IT WORK</h1>
  <ul>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/howdoesitwork/fids';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork/fids') > -1) { ?>class="active"<?php } ?>><p>FIDS</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/howdoesitwork/impact';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork/impact') > -1) { ?>class="active"<?php } ?>><p>Our Impact</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/howdoesitwork/challenge';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork/challenge') > -1) { ?>class="active"<?php } ?>><p>The Challenge</p></li>
    <li class="hide" onclick="javascript:window.location.href = '/dfcusa/pages/howdoesitwork/judging';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork/judging') > -1) { ?>class="active"<?php } ?>><p>Judging</p></li>
    <li onclick="javascript:window.location.href = '/dfcusa/pages/howdoesitwork/portal';" <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork/portal') > -1) { ?>class="active"<?php } ?>><p>Web Portal</p></li>
  </ul>
  <div class="clear"></div>
</div>

<script>
  $(document).ready(function() {
    $('.inner_navigation').find('li').find('a').removeClass('active');
    $('[data-navigation="howdoesitwork"]').find('a').addClass('active');
  });
</script>