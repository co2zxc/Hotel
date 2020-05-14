<?php
define("IN_SCRIPT","1");
error_reporting(0);
session_start();

require("include/SiteManager.class.php");

/// Connect to the website database

$website = new SiteManager();

$website->LoadSettings();
$website->LoadTemplate();

if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}

$website->Render();
?>