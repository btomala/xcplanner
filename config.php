<?php

$GOOGLE_MAPS_API_KEY = "ABQIAAAAmoyS70qBKY-s72ZC4TaYjBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxTaKKlB6EIqEuXqoufaOaKPR7O_6Q";
$SMARTY_DIR = "smarty";
$SRTM_TILE_DIR = "srtm/tile";
$SRTM_TILEZ_DIR = "srtm/tilez";
$DEFAULT_LOCATION = "Fiesch";
$DEFAULT_FLIGHT_TYPE = "olc5";
$DEFAULT_TURNPOINTS = null;
$DEFAULT_START = null;
$XCONTEST = in_array($_SERVER["SERVER_NAME"], array("localhost", "paraglidingforum.com", "www.paraglidingform.com", "xcontest.org", "www.xcontest.org"));
$get_elevation = "get_elevation_srtm";

if (function_exists("date_default_timezone_set"))
    date_default_timezone_set("UTC");

?>
