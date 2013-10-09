<?php
    $server_name = $_SERVER['HTTP_HOST'];
    if ( $server_name == "shaunwebb.com" ) { $server_name .= "/UCSF" ; }
 ?>

<!-- Begin Footer -->
<div id="footer">

<div id="footercontent"><a href="http://library.ucsf.edu/collres/archives/contactform.html" class="footerlinks"><strong>CONTACT US</strong></a><a href="#" class="footerlinks"></a><img src="http://<?php echo $server_name ?>/images/footer_divider.jpg" width="25" height="9" border="0" /><a href="http://<?php echo $server_name ?>/about.html" class="footerlinks"><strong>ABOUT</strong></a><a href="#" class="footerlinks"></a><img src="http://<?php echo $server_name ?>/images/footer_divider.jpg" width="25" height="9" border="0" /><a href="http://<?php echo $server_name ?>/related_links.html" class="footerlinks"><strong>RELATED LINKS</strong></a></div>

<div id="footercontent2">© 2013 The Regents of the University of California</div>

<div id="footercontent_logo"><a href="http://library.ucsf.edu/"><img src="http://<?php echo $server_name ?>/images/library_logo.jpg" border="0" /></a></div>

</div>
<!-- End Footer -->
