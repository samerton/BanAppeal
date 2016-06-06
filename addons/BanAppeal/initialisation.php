<?php 
/*
 *	Made by Partydragen
 *  http://partydragen.com/
 *
 *  License: MIT
 */

// Initialise the banappeal addon
// We've already checked to see if it's enabled

require('addons/BanAppeal/language.php');

// Enabled, add links to navbar
$navbar_array[] = array('banappeal' => $banappeal_language['banappeal_icon'] . $banappeal_language['banappeal']);
