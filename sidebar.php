
<?php
wp_nav_menu(array('container' => 'nav', 'container_class' => 'left-nav'));

if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('vimpaimet') );
