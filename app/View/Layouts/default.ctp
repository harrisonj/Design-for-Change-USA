<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>Design for Change USA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- SET: FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png">
	<!-- END: FAVICON -->

	<!-- SET: STYLESHEET -->
	<link href="/css/style.css?ref=<?php echo time() ?>" rel="stylesheet" type="text/css" media="all">
	<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
	<link href="/css/unslider.css" rel="stylesheet">
	<link href="/css/unslider-dots.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- END: STYLESHEET -->

	<!-- SET: SCRIPTS -->

	<script type="text/javascript" src="/dfcusa/app/webroot/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/dfcusa/app/webroot/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.cycle.js"></script>
	<script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.youtubepopup.js"></script>
	<script type="text/javascript" src="/dfcusa/app/webroot/js/jquery.type.min.js"></script>

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

<?php if (gethostname() == 'ip-172-30-1-28') { ?>
<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
	for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
		mixpanel.init("9cb70e6fd7c843ba2b9f0a4de6c77646");</script><!-- end Mixpanel -->
	<?php } ?>

</head>

<body class="<?php echo $this->params[pass][0]; ?>">

	<!-- wrapper starts -->
	<div class="wrapper <?php if (($_SERVER['REQUEST_URI'] != '/') && (strpos($_SERVER['REQUEST_URI'], '/pages/home') == false)) { ?>inside<?php } ?>">

		<?php echo $this->element('header') ?>

		<?php echo $this->fetch('content'); ?>

		<?php echo $this->element('footer'); ?>

	</div>
	<script type="text/javascript" src="/dfcusa/app/webroot/js/custom.js"></script>
</body>

<script>
	$(function () {
		$('a.popup-youtube').YouTubePopup();

		currentPage = document.URL.split('/').pop();
		aPage = currentPage.split('?');
		currentPage = aPage[0];
		if (currentPage == '') currentPage = 'home';
		trackEvent('view page - ' + currentPage);

// setInterval(function() {
//   $('.switch').html('').typetype('8 YEAR OLDS CLEAN UP THEIR COMMUNITY...', {e: 0,  t: 50,
//     callback: function (){
//       setTimeout(function() {
//         $('.switch').html('').typetype('TEENAGERS REDUCE DROPOUT RATES...', {e: 0,  t: 50,
//           callback: function (){
//             setTimeout(function() {
//               $('.switch').html('').typetype('10 YEAR OLDS SHUT DOWN DRUG HOUSES...', {e: 0,  t: 50});
//             }, 3000);
//           }});
//       }, 3000);
//     }});
// }, 14000);
});

	function trackEvent(eventStr, properties) {
		<?php if (gethostname() == 'ip-172-30-1-28') { ?>
			if (properties == undefined) properties = [];
			if (location.search.split('ref=')[1] != undefined) properties.push({ref:location.search.split('ref=')[1]});
			if (location.hostname.match('designforchange.us')) mixpanel.track(eventStr, properties);
			<?php } ?>
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

	<script src="/dfcusa/app/webroot/js/unslider-min.js"></script>

	<div id="loginForm" class="hide dialog">
		<div class="close">x</div>
		<form class="panel-body form">
			<h1>DFC Web Portal Login</h1>
			<div class="form-group">
				<label class="control-label">E-mail</label>
				<input class="form-control" id="email">
			</div>
			<div class="form-group">
				<label class="control-label">Password</label>
				<input type="password" id="password" placeholder="Password" class="form-control">
			</div>
			<div class="alert alert-danger hide">
				E-mail address or password is incorrect.
			</div>
			<button type="submit" class="submitLoginForm">Sign in</button>
			<a href="javascript:void(0)" class="pull-right m-t-xs requestResetPassword"><small>Forgot password?</small></a>
			<div class="line"></div>
			<p class="text-muted text-center"><small>Do not have an account?</small></p>
			<a href="#register">Create an account</a>
		</form>
	</div>

</div>

</html>