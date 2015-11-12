<?php 

// CHANGE - URLFOR REPO - and in /vendor/CommonAccord/cmacc/libary/cmacc_helpers.php - edit titles etc.
// 

DEFINE('ROOT' ,dirname(__FILE__) ); // Root directory of site

DEFINE('LIB_PATH', ROOT . '/vendor/CommonAccord/cmacc-ui/library'); // Create global variable to our library

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . LIB_PATH . DIRECTORY_SEPARATOR);	// Include it in PHP include/require search

DEFINE('ASSETS_PATH', 'visual');  // Create global variable to our css and js assets

DEFINE('URLFORREPO', 'https://github.com/CommonAccord/Site-DataShare/');	// The repo home

DEFINE('URLFORDOCSINREPO', URLFORREPO . "/blob/master/Doc/");	// Docs in the repo

DEFINE('TEXTEDITWINDOWSIZE', 'cols=120 rows=30'); //Sets the size of the text edit window in both edit.php and openedit.php
DEFINE('TEXT_EDIT_WINDOW_SIZE', 'cols=120 rows=30'); //Sets the size of the text edit window in both edit.php and openedit.php

DEFINE('TEXTEDITAREASTYLE', 'font-size: 16px; padding:10px;'); //Sets the size of the text edit window in both edit.php and openedit.php
DEFINE('TEXT_EDIT_AREA_STYLE', 'font-size: 16px; padding:10px;'); //Sets the size of the text edit window in both edit.php and openedit.php

DEFINE('LANDING_MD', 'ZZZ/landing.md'); // The repo home

DEFINE('SOURCE_TAB_MESSAGE', 'Source'); // Tab

DEFINE('EDIT_TAB_MESSAGE', 'Edit'); // Tab

DEFINE('COMPLETE_TAB_MESSAGE', 'Edit and Complete');    // Tab

DEFINE('EDIT_FORM_MESSAGE', 'Form Edit');    // Tab

DEFINE('DOC_TAB_MESSAGE', 'Document');  // Tab

DEFINE('PRINT_TAB_MESSAGE', 'Print');   // Tab


include("cmacc_helpers.php");

?>
