<?php

/*
Plugin Name: myfirstplugin
Plugin URI: localhost:8080
Description: this is my first plugin !!!
Version: 0.1
Author: Gyo
Author URI: localhost:8080
License: Dunno
Text Domain: gyogyo
*/


function zoli($atts, $content=null){
echo "<b>".$content."</b>";
}

function swapi(){
    echo "";
}

add_shortcode('zoli', 'zoli');