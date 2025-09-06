<?php
/**
 * Bootstrap loader
 * Automatically include hooks.php for WordPress theme
 */

$hooks_file = __DIR__ . '/hooks.php';
if(file_exists($hooks_file)){
    include $hooks_file;
}
?>
