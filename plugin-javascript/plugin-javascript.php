<?php

/**
 * Plugin Name: Custom JS
 * Description: This plugin injects Javascript code at the bottom of the page
 * Version: 1.0.0
 * Author: Sergio Diestra
 * Author URI: https://sergiodiestra.com
 * License: GPL2
 */

add_action('wp_footer', function () { ?>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let nombre = prompt('Please enter your name');
            alert(`Welcome to my page ${nombre}`);
        });
    </script>
<?php }, 9999); ?>