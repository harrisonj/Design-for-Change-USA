<header>
    <div class="header_top">
        <div class="container">
            <div class="inner_login">
                <ul>
                    <li><a href="/pages/who/contactus">Contact Us</a></li>
                    <li><a href="/pages/what/faq" class="signin">FAQ</a></li>
                    <li><a href="/pages/start/portal" class="signin">Register</a></li>
                    <li class="last"><a href="/pages/start/challenge" class="register">Join the Challenge</a></li>
                </ul>
                <div class="clear"></div>   
            </div>
            <div class="clear"></div>
            <div class="inner_logo"><a href="/"><img src="/images/inner_logo.png" width="196" height="93" alt="logo"></a></div>
        </div>                  
    <!-- Navigation start -->
    <nav class="inner_nav">
        <div class="container">
            <div class="inner_navigation">
                <ul>
                    <li data-navigation="home"><a href="/" class="home <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/home') > -1) { ?>active<?php } ?>">Home</a></li>
                    <li data-navigation="what"><a href="/pages/what/whatwedo" class="what <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/what') > -1) { ?>active<?php } ?>">What We Do</a></li>
                    <li data-navigation="who"><a href="/pages/who/ourstory" class="who <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/who') > -1) { ?>active<?php } ?>">Who We Are</a></li>
                    <li data-navigation="start"><a href="/pages/start/challenge" class="start <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/start') > -1) { ?>active<?php } ?>">Get Started</a></li>
                    <li data-navigation="stories"><a href="/pages/stories/impact" class="stories <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories') > -1) { ?>active<?php } ?>">Success Stories</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
<!-- Navigation ends -->
</header>   
