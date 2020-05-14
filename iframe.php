<?php
define("IN_SCRIPT","1");
error_reporting(0);
session_start();

require("include/SiteManager.class.php");

$website = new SiteManager();

$website->LoadSettings();
$website->CreateDefaultTemplate();

if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}

$website->RenderIframe();
?>