<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Design for Change</title>
	<link rel="stylesheet" href="/dfcusa/css/main.css" />
	<link rel="stylesheet" href="/dfcusa/css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/dfcusa/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/dfcusa/css/style.css" type="text/css" media="screen" />
    <link href="css/carousel/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/dfcusa/css/skin.css" />
    <script type="text/javascript" src="/dfcusa/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/dfcusa/js/jquery.expander.js"></script>
    <script type="text/javascript" src="/dfcusa/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/dfcusa/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="/dfcusa/js/carousel/jquery.jcarousel.min.js"></script>    
</head>

<body>
<? echo $this->element('header') ?>
<div class="wrapper">
    <div class="content">
		<? echo $this->element('leftcontent') ?>
		<?php echo $this->fetch('content'); ?>
		
	</div>
</div>
<div class="footer">
	<div class="topFooter">
    	<ul class="topFooterList">
			<li><a href="/submit">Submit Your Project</a></li>
			<li><span>|</span></li>
        	<li><a href="/aboutus">About Us</a></li>
            <li><span>|</span></li>
            <li><a href="/judging">Judging</a></li>
            <li><span>|</span></li>
            <li><a href="/volunteer">Volunteer</a></li>
            <li><span>|</span></li>
            <li><a href="/press">Press</a></li>
            <li><span>|</span></li>
            <li><a href="/partners">Partners</a></li>
            <li><span>|</span></li>
            <li><a href="/contactus">Contact Us</a></li>
            <li><span>|</span></li>
            <li><a href="http://www.dfcworld.com" target="_new">DFC World</a></li>
        </ul>
        <div class="downloadApp">
        	<ul class="dwApp">
            	<li>Download</li>
                <li><span><a href="http://www.youtube.com/dfcworld2011" target="_new">DFC Videos</a></span></li>
                <li><a href="http://itunes.apple.com/in/app/dfc-videos/id483311671?mt=8" target="_new">Mobile app</a></li>
            </ul>
            <a class="mobileicon" target="_new" href="http://itunes.apple.com/in/app/dfc-videos/id483311671?mt=8"></a>
        </div>
    </div>
    <div class="bottomFooter">
    	<p>All Submitted Stories will be Property of Design For Change School Challenge Contest</p>
        <ul class="bottomFooterList">
        	<li><p class="list">Connect with us on</p></li>
            <li><a class="facebook" href="http://www.facebook.com/icandfc" target="_new"></a></li>
            <li><a class="twitter" href="http://www.twitter.com/dfcusa" target="_new"></a></li>
            <li><a class="youtube" href="http://www.youtube.com/dfcworld2011" target="_new"></a></li>
        </ul>
    </div>
</div>
    <script type="text/javascript">

	jQuery(document).ready(function() {
		$('#slider').nivoSlider({effect: 'fade',directionNav: false});
		jQuery('#mycarousel').jcarousel({
			animation: 1000
		});
        $(".expander").expander({
            slicePoint: 180,
        });
	});

</script>
</body>
</html>

