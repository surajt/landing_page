<?php
/* Company Name and Slogon */
define("COMPANY_NAME","A Company Name");
define("COMPANY_SLOGON","Slogon of Company");
/* End */
/* Construction Date and Progress */
define("COMPLETE_DATE","2014/06/12 11:45:00 AM");
define("COMPLETE_PERCENTAGE","85");
define("COMPLETE_LANG","We are about %d%% finished.");
/* End */
/* Company Address */
define("SHOW_TOP_ADDRESS",true);
define("SHOW_INVITE_BAR_ADDRESS",true);
define("ADDRESS_1","3912 Jefferson Street");
define("ADDRESS_2","");
define("STATE","VA");
define("CITY","Norfolk");
define("ZIPCODE","23510");
/* End */
/* Contact Info */
define("SHOW_CONTACT",true);
define("PHONE","757-823-5705");
define("FAX","757-823-5705");
define("EMAIL","info@youcompany.com");
/* End */
/* Email Settings */
define("TO_NAME","A Company Name");
define("TO_EMAIL","info@youcompany.com");
define("MAIL_TYPE","HTML"); // HTML or PLAIN
define("MAIL_SUBJECT","Site Information");
/* End */
/* Twitter Setup */
define("TWITTER","");// Twitter Name Note: Leave empty will not display the whole tab seection.
/* Completion Time Extract */
$TimeStamp = strtotime( COMPLETE_DATE );
$Year = date("Y",$TimeStamp);
$Day = date("d",$TimeStamp);
$Month = date("m",$TimeStamp);
$Hour = date("H",$TimeStamp);
$Minute = date("i",$TimeStamp);
/* End */
?>