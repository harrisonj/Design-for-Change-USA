<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Design for Change USA</title>

  <!-- SET: FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
  <!-- END: FAVICON -->

  <!-- SET: STYLESHEET -->
  <link href="/css/style.css?ref=<?php echo time() ?>" rel="stylesheet" type="text/css" media="all">
  <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- END: STYLESHEET -->

    <!-- SET: SCRIPTS -->
    
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.cycle.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.youtubepopup.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.carousel.min.js"></script>

    <!-- END: SCRIPTS -->

    <!--[if lt IE 9]>
    <script type="text/javascript">
      document.createElement("header");
      document.createElement("nav");
      document.createElement("section");
      document.createElement("article");
      document.createElement("aside");
      document.createElement("footer");
    </script>
    <![endif]-->

    <!--[if IE]>
    <style type="text/css">.pie, #navigation ul li a, .inner_young a, .inner_tools ul li, .inner_tools ul li h3, .inner_how_do a, .label ul li input, .label ul li .submit, .inner_login ul li a  {behavior:url(PIE.htc);}

    .inner_banner { filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/banner_img.png',sizingMethod='scale'); }
    </style>
    <![endif]-->

    <!--[if IE 7]><style type="text/css">
        .conect         { padding-bottom:0;}
        .inner_q_tag    { bottom:-3px;}
        .woman          { bottom:0px;}
    </style><![endif]--> 

    <!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
    mixpanel.init("9cb70e6fd7c843ba2b9f0a4de6c77646");</script><!-- end Mixpanel -->
</head>

<body style="background-color: #FFF">

<!-- wrapper starts -->
  <div class="wrapper <?php if (($_SERVER['REQUEST_URI'] != '/') && (strpos($_SERVER['REQUEST_URI'], '/pages/home') == false)) { ?>inside<?php } ?>">

    <?php echo $this->element('header') ?>

    <?php echo $this->fetch('content'); ?>

    <?php echo $this->element('footer'); ?>
        
  </div>

</body>

<script>
    $(function () {
      $('a.popup-youtube').YouTubePopup();

      currentPage = document.URL.split('/').pop();
      aPage = currentPage.split('?');
      currentPage = aPage[0];
      if (currentPage == '') currentPage = 'home';
      trackEvent('view page - ' + currentPage);
    });

    function trackEvent(eventStr, properties) {
      if (properties == undefined) properties = [];
      if (location.search.split('ref=')[1] != undefined) properties.push({ref:location.search.split('ref=')[1]});
      if (location.hostname.match('designforchange.us')) mixpanel.track(eventStr, properties);
    }
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66631957-1', 'auto');
  ga('send', 'pageview');
</script>

</html>