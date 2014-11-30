<header>
    <div class="header_top">
        <div class="container">
            <div class="inner_login">
                <ul>
                    <li><a href="/pages/whatisdfc/contactus">Contact Us</a></li>
                    <li class="last"><a href="/pages/getstarted/start" class="sign">Sign Up</a></li>
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
                    <li data-navigation="whatisdfc"><a href="/pages/whatisdfc/whatwedo" class="what <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/whatisdfc') > -1) { ?>active<?php } ?>">What Is DFC</a></li>
                    <li data-navigation="howdoesitwork"><a href="/pages/howdoesitwork/fids" class="get <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/howdoesitwork') > -1) { ?>active<?php } ?>">How Does It Work</a></li>
                    <li data-navigation="getstarted"><a href="/pages/getstarted/start" class="getstarted <?php if (strpos($_SERVER['REQUEST_URI'], '/pages/getstarted') > -1) { ?>active<?php } ?>">Get Started</a></li>
                    <li data-navigation="resources"><a href="/pages/resources/documents" class="resources <?php if (strpos($_SERVER['REQUEST_URI'], '/resources') > -1) { ?>active<?php } ?>">Resources</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
<!-- Navigation ends -->
</header>   
