<?php
    $server_name = $_SERVER['HTTP_HOST'];
    if ( $server_name == "shaunwebb.com" ) { $server_name .= "/UCSF" ; }
 ?>

<!-- Begin UCSF banner -->
<div id="topbar"><img src="http://<?php echo $server_name ?>/images/bannerblack.gif" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" alt="UCSF home page" coords="30,3,291,28" href="http://www.ucsf.edu/" />
    <area shape="rect" alt="About UCSF" coords="301,2,373,26" href="http://www.ucsf.edu/about_ucsf/" />
    <area shape="rect" alt="Search UCSF"  coords="382,3,461,27" href="http://www.ucsf.edu/search/" />
    <area shape="rect" alt="UCSF Medical Center" coords="470,3,596,26" href="http://www.ucsfhealth.org/" />
  </map>
</div>
<!-- End UCSF banner -->
