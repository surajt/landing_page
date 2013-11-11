<?php
session_start();
include_once("bin/Configuration.php");
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo COMPANY_NAME ?>:: Under Construction</title>
<meta name="Description" content="">
<meta name="title" content="<?php echo COMPANY_NAME ?> :: Under Construction" />
<meta name="viewport" content="width=device-width">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link  type="text/plain" rel="author" href="humans.txt" />
<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon.png"/>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/jquery-ui-1.8.17.custom.css">
<script src="js/libs/modernizr-2.5.3.min.js"></script>
<script type="text/javascript">
		var theYear = parseInt(<?php echo $Year; ?>);
		var theDay = parseInt(<?php echo $Day; ?>);
		var theMonth = parseInt(<?php echo $Month; ?>);
		var theHour = parseInt(<?php echo $Hour; ?>);
		var theMinutes = parseInt(<?php echo $Minute; ?>);
		var theEnd = new Date(theYear, theMonth-1, theDay, theHour, theMinutes); 
		var Percentage = "<?php echo COMPLETE_PERCENTAGE; ?>";
		var TwitterAcc="<?php echo TWITTER; ?>";
	</script>
</head>
<body>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div class="container_16">
  <header>
    <div class="grid_10">
      <hgroup>
        <h1 id="logo"><a href="#"><?php echo COMPANY_NAME; ?></a></h1>
        <h4><?php echo COMPANY_SLOGON; ?></h4>
      </hgroup>
    </div>
    <div class="grid_6">
      <?php if (SHOW_TOP_ADDRESS==true) { ?>
      <p class="small-text">
        <?php if(ADDRESS_1!="") {echo ADDRESS_1;}?>
        <br>
        <?php if(ADDRESS_2!="") { echo ADDRESS_2."<br>"; }?>
        <?php if(CITY!="") {echo CITY;} ?>
        <?php if(STATE!="") {echo STATE.","; }?>
        <?php if(ZIPCODE!=""){echo ZIPCODE;}?>
      </p>
      <?php } ?>
    </div>
  </header>
  <div class="clear"></div>
  <div role="main" id="main-content">
    <article>
      <div id="countdown"></div>
      <div class="clear"></div>
      <br />
      <div class="progress-bar aligncenter">
        <h3><?php printf(COMPLETE_LANG,COMPLETE_PERCENTAGE); ?></h3>
        <div id="progressbar"></div>
      </div>
      <br />
      <!-- Start Tabs -->
      <div id="tabs">
        <ul>
          <li><a href="#invite-signup">Invite Signup</a></li>
          <li><a href="#newsletter-signup">Newsletter Signup</a></li>
          <?php if(TWITTER!="") { ?>
          <li><a href="#twitter">Twitter</a></li>
          <?php } ?>
        </ul>
        <div id="invite-signup">
          <div class="grid_10">
            <h3>Beta Invite Page</h3>
            <form class="form uniformForm validateForm" id="form1" >
              <p>
                <label for="name">Name <span class="error">*</span></label>
                <input type="text" name="name" id="name" class="validate[required] text" size="30">
              </p>
              <p>
                <label for="email">Email <span class="error">*</span></label>
                <input type="email" name="email" id="email" class="validate[required,custom[email]] email" size="30">
              </p>
              <p>
                <label for="yourself">About yourself</label>
                <textarea name="yourself" id="yourself" class="uniform" cols="50" rows="5"></textarea>
              </p>
              <p>
                <label id="processshow">&nbsp;</label>
                <button name="btn" class="btn btn-grey" type="button" id="btn">Send Message</button>
              </p>
            </form>
          </div>
          <div class="grid_5">
            <h3>Address</h3>
            <p>
              <?php if(ADDRESS_1!="") {echo ADDRESS_1;}?>
              <br>
              <?php if(ADDRESS_2!="") { echo ADDRESS_2."<br>"; }?>
              <?php if(CITY!="") {echo CITY;} ?>
              <?php if(STATE!="") {echo STATE.","; }?>
              <?php if(ZIPCODE!=""){echo ZIPCODE;}?>
            </p>
            <p>
              <?php if(PHONE!=""){echo "Phone: ".PHONE;}?>
              <br>
              <?php if(FAX!=""){echo "Fax: ".FAX;}?>
              <br>
              <?php if(EMAIL!=""){echo "Email: ".EMAIL;}?>
            </p>
          </div>
          <div class="clear"></div>
        </div>
        <div id="newsletter-signup">
          <h3>We will let you know when we are ready</h3>
          <form class="form" id="from2">
            <p>
              <label for="subscriberemail">Email <span class="error">*</span></label>
              <input type="email" name="subscriberemail" id="subscriberemail" class="validate[required,custom[email]] email" size="30">
            </p>
            <p>
              <label id="p-show">&nbsp;</label>
              <button name="btnsubscribe" class="btn btn-grey" type="button" id="btnsubscribe">Subscribe</button>
            </p>
          </form>
        </div>
        <?php if(TWITTER!="") { ?>
        <div id="twitter">
          <div id="twitter-status"> </div>
          <div class="clear"></div>
        </div>
        <?php } ?>
      </div>
      <!-- End -->
      <br>
    </article>
  </div>
  <footer>
    <div class="grid_10">
      <p class="small-text">&copy; CopyRight Reserved <?php echo date("Y"); echo " <br> ".COMPANY_NAME; ?> </p>
    </div>
    <div class="grid_6">
      <p class="small-text alignright">Developed By: <a href="http://artisticitsolutions.com" title="Artistic IT Solution" target="_blank">Artistic IT Solution</a> </p>
    </div>
  </footer>
</div>
<!-- JavaScript at the bottom for fast page loading -->
<script type="text/javascript" src="js/libs/jquery-1.7.1.min.js"></script>
<!-- scripts concatenated and minified via build script -->
<script type="text/javascript" src="js/libs/jquery-ui-1.8.17.custom.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<!-- end scripts -->
</body>
</html>