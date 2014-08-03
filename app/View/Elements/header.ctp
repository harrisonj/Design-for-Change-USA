<header>
    <div class="header_top">
        <div class="container">
            <div class="inner_login">
                <ul>
                    <li class="hide"><a href="#">LOGIN</a></li>
                    <li class="last"><a href="/getstarted" class="sign">Get Started</a></li>
                </ul>
                <div class="clear"></div>   
            </div>
            <div class="clear"></div>
            <div class="inner_logo"><a href="/"><img src="images/inner_logo.png" width="196" height="93" alt="logo"></a></div>
        </div>                  
    </div>
    <!-- Navigation start -->
    <nav class="inner_nav">
        <div class="container">
            <div class="inner_navigation">
                <ul>
                    <li><a href="/whatisdfc" class="what <?php if (strpos($_SERVER['REQUEST_URI'], '/whatisdfc') > -1) { ?>active<?php } ?>">What is DFC?</a></li>
                    <li><a href="/getstarted" class="get <?php if (strpos($_SERVER['REQUEST_URI'], '/getstarted') > -1) { ?>active<?php } ?>">Get Started</a></li>
                    <li><a href="/documents" class="documents <?php if (strpos($_SERVER['REQUEST_URI'], '/documents') > -1) { ?>active<?php } ?>">Documents</a></li>
                    <li><a href="/projects" class="projects <?php if (strpos($_SERVER['REQUEST_URI'], '/projects') > -1) { ?>active<?php } ?>">Projects</a></li>
                    <li><a href="/faq" class="faq <?php if (strpos($_SERVER['REQUEST_URI'], '/faq') > -1) { ?>active<?php } ?>">FAQ</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
<!-- Navigation ends -->
</header>   