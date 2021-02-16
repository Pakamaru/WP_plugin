<?php
if(!defined('WP_UNINSTALL_PLUGIN')){
	die;
}

// Clear the whole database

// Pure SQL
global $wpdp;
$wpdp->query("DELETE FROM wp_posts WHERE post_type = 'book'");
$wpdp->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_post)");
$wpdp->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_post)");