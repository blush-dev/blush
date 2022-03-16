<?php
# Custom content types configuration.
#
# "{$type}" => [
#	'path'         => string, // path relative to `user/content` (no slashes)
#	'taxonomy'     => bool,   // whether content type is a taxonomy
#       'term_collect' => string  // content type for taxonomy terms to collect
# ]

return [
	// Create custom content type and taxonomy for blog posts.
	'post' => [
		'path'       => 'blog',
		'collection' => [ 'order' => 'desc' ]
	],
	'tag' => [
		'path'            => 'blog/tags',
		'taxonomy'        => true,
		'term_collect'    => 'post',
		'term_collection' => [ 'order' => 'desc' ]
	]
];
