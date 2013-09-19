<?php
namespace TU;

include_once(ABSPATH . 'wp-admin/includes/plugin.php');

if (!is_plugin_active('train-up/index.php')) {
  wp_die(__('This theme is dependant on the Train-Up! plugin'));
} else if (is_user_logged_in()) {
  Pages::factory('My_account')->go_to();
} else {
  Pages::factory('Login')->go_to();
}
