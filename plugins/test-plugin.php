<?php

/*
* Plugin Name: Example testing plugin
*/

add_action('admin_notices', function() {
    echo '<div class="notice notice-info">
        <p>my testing plugin function</p>
    </div>';
});
