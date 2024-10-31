=== Post Comment Count ===
Contributors: Alireza Abedini
Tags: posts, comments
Tested up to: 2.5
Requires at least: Maybe All
Stable tag: 1.2

Count the number of comments for each post

== Description ==

Post Comment Count is a simple plugin for counting comments. it's useful for some plugins such as INAP (Inline ajax Page), ...

== Installation ==

1. Upload `post-comment-count.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php post_comment_count(); ?>` in your templates. If used in "the loop" it will count the number of comments for the specific post, otherwise it will count the total number of comments in all posts
* You can use "`total_comment_count()`" and "`total_approved_comment_count()`" functions, if you need