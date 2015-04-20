<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Design for Change USA</title>

  <!-- SET: FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
  <!-- END: FAVICON -->

  <!-- SET: STYLESHEET -->
  <link href="/css/style.css" rel="stylesheet" type="text/css" media="all">
  <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- END: STYLESHEET -->

    <!-- SET: SCRIPTS -->
    
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.cycle.js"></script>
    <script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.youtubepopup.js"></script>

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
</head>

<body>

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
    });
</script>

</html>