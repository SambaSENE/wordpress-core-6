<?php 

function registerNavbar(){
    register_nav_menu('header' , 'header navbar');
}

 add_action('after_setup_theme' , 'registerNavbar');