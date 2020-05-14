<?php
include("check_user.php");
define("IN_SCRIPT","1");

//error_reporting(0);
session_start();

include("../include/SiteManager.class.php");

$website = new SiteManager();
$website->SetDataFile("../data/rooms.xml");
$website->SetBookingFile("../data/bookings.xml");
$website->LoadSettings();

$website->LoadTemplate();

if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}
else
{
	$website->SetPage("bookings");
}

$website->Render();
?>