<header>
    <div class="header_top">
        <div class="container">
            <div class="inner_login">
                <ul>
                    <li><a href="/pages/about/contactus">Contact Us</a></li>
                    <li><a href="/pages/howdoesitwork/faq" class="faq">FAQ</a></li>
                    <li><a href="/pages/getstarted/portal" class="register">Sign Up</a></li>
                    <li class="last"><a href="http://portal.designforchange.us/dfcusa-pm/pages/login" target="_new" class="signin">Login</a></li>
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
                    <li data-navigation="about"><a href="/pages/about/whatwedo" class="what <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/about') > -1) { ?>active<?php } ?>">About DFC</a></li>
                    <li data-navigation="howdoesitwork"><a href="/pages/howdoesitwork/fids" class="get <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork') > -1) { ?>active<?php } ?>">How Does It Work</a></li>
                    <li data-navigation="getstarted"><a href="/pages/getstarted/portal" class="getstarted <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted') > -1) { ?>active<?php } ?>">Get Started</a></li>
                    <li data-navigation="stories"><a href="/pages/stories/2015results" class="success <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/stories') > -1) { ?>active<?php } ?>">Success Stories</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
<!-- Navigation ends -->
</header>   
