<?php

defined( 'fileaway' ) or die( 'Water, water everywhere, but not a drop to drink.' );
$playback      = false;
$playbackpath  = false;
$direxcluded   = 0;
$thefiles      = null;
$included      = null;
$excluded      = null;
$rawnames      = null;
$iconstyle     = null;
$icocol        = null;
$path          = null;
$start         = null;
$basename      = null;
$crumbies      = null;
$rsslink       = null;
$directories   = false;
$dir           = null;
$fafl          = null;
$faui          = null;
$faun          = null;
$faur          = null;
$type          = 'table';
$sorting       = $editor ? true : $sorting;
$s2skipconfirm = false;