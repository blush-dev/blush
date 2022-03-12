<?php
# Cache configuration.

return [
	// Secret key used for purging the cache.
	// yoursite.com/cache/purge/{$secret_key}
	// @todo Go in a `.env` file?
	'secret_key' => 'abc123',

	// Exclude metadata (frontmatter) from being cached. This will keep
	// cached file sizes smaller. Note that meta used for sorting queries,
	// such as `title`, `date`, and taxonomy content types, should be
	// cached. The below sets up some sensible defaults, but customize to
	// suit your project.
	'content_exclude_meta' => [
		'excerpt',
		'image',
		'collection',
		'view'
	],

	// Enable/Disable full-page file cache. Data is still cached with this
	// disabled. However, with this enabled, the final page HTML served to
	// the browser is cached, too.
	'global' => false,

	// Exclude paths (relative to site URI) from the global cache.
	// This will also exclude child paths (e.g., `a/b` excludes `a/b/c`).
	'global_exclude' => [
		'cache/purge'
	]
];
