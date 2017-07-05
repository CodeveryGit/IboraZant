<?php

require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme_support.php';
require get_template_directory() . '/inc/walker.php';
require get_template_directory() . '/inc/infinite-scroll.php';

add_filter('add_to_cart_redirect', 'redirect_to_checkout');