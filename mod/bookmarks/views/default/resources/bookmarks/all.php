<?php
/**
 * Elgg bookmarks plugin everyone page
 *
 * @package ElggBookmarks
 */

elgg_push_breadcrumb(elgg_echo('collection:object:bookmarks'));

elgg_register_title_button('bookmarks', 'add', 'object', 'bookmarks');

$content = elgg_list_entities([
	'type' => 'object',
	'subtype' => 'bookmarks',
	'full_view' => false,
	'view_toggle_type' => false,
	'no_results' => elgg_echo('bookmarks:none'),
	'preload_owners' => true,
	'preload_containers' => true,
	'distinct' => false,
]);

$title = elgg_echo('collection:object:bookmarks:all');

$body = elgg_view_layout('content', [
	'filter_context' => 'all',
	'content' => $content,
	'title' => $title,
	'sidebar' => elgg_view('bookmarks/sidebar'),
]);

echo elgg_view_page($title, $body);
