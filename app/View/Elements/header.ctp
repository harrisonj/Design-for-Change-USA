<div style="width: 100%; height: 9em; background-color: #E7F2F7; color: #444; font-family: 'AbelRegular'; position: relative">
    <div style="font-size: 2em; color: #444; position: absolute; top: 0px; right: 10px; cursor: pointer" onclick="javascript:$(this).parent().slideUp()">x</div>
    <div style="padding: 15px 20px 20px 20px">
        <font style="font-size: 2em">Welcome to Design For Change USA</font>
        <p style="font-size: 1.1em">We're working on a new online experience to help you learn more about Design for Change. We welcome your feedback.<br>
        Questions or comments? Let us know - <a href="mailto: info@designforchange.us">info@designforchange.us</a>
        </p>
    </div>
</div>
<div class="header">
    	<a href="/" class="logo"></a>
    	<div class="navBarHome">
        	<ul>
                <li><a <? if ($page == 'whatisdfc') { ?>class="active"<? } ?> href="/whatisdfc">What is DFC?</a></li>
                <li><a <? if ($page == 'getstarted') { ?>class="active"<? } ?> href="/getstarted">Get Started</a></li>
                <li><a <? if ($page == 'documents') { ?>class="active"<? } ?> href="/documents">Documents</a></li>
                <li><a <? if ($page == 'projects') { ?>class="active"<? } ?> href="/projects">Projects</a></li>
                <li class="last"><a <? if ($page == 'faq') { ?>class="active"<? } ?> href="/faq">FAQ</a></li>
            </ul>
    	</div>
</div><!--closing div header-->