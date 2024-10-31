<?php
/*
Plugin Name: PostComment Count
Description: Counts the number of post comments.
Version: 1.2
Author: Alireza Abedini
*/

function post_comment_count() {
    global $wpdb, $id;
	$request = "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_post_ID = '$id' AND comment_approved = '1'";

    echo $wpdb->get_var($request);
}

function total_approved_comment_count() {
    global $wpdb;
	$request = "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'";

    echo $wpdb->get_var($request);
}
function total_comment_count() {
    global $wpdb;
	$request = "SELECT COUNT(*) FROM $wpdb->comments";

    echo $wpdb->get_var($request);
}
?>