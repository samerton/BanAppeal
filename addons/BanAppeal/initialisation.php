<?php 
/*
 *	Made by Partydragen
 *  http://partydragen.com/
 *
 *  License: MIT
 */

// Initialise the ban appeal addon
// We've already checked to see if it's enabled

require('addons/BanAppeal/language.php');

// Enabled, add links to navbar
$navbar_array[] = array('banappeal' => $banappeal_language['ban_appeal_icon'] . $banappeal_language['ban_appeal']);
