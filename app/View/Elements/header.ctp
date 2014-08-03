<div style="width: 100%; height: 9em; background-color: #E7F2F7; color: #444; font-family: 'AbelRegular'; position: relative" id="underconstruction">
    <div style="font-size: 2em; color: #444; position: absolute; top: 0px; right: 10px; cursor: pointer" onclick="javascript:$(this).parent().slideUp();$.cookie('construction', true)">x</div>
    <div style="padding: 15px 20px 20px 20px">
        <font style="font-size: 2em">Welcome to Design For Change USA, <em>we need your help now!</em></font>
        <p style="font-size: 1.1em">We're actively raising funds to send this year's winning teams to India for the Be The Change Conference in September, 2014.<br>
        Please help us change their lives - <a href="http://dfcusa.causevox.com" target="_new">Donate Now!</a>
        </p>
    </div>
</div>
<script>
    if ($.cookie('construction') == 'true') {
        $('#underconstruction').hide();
    }
</script>
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