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