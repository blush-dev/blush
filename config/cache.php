<?php
# Cache configuration.

return [
	// Secret key used for purging the cache.
	// yoursite.com/cache/purge/{$secret_key}
	// @todo Go in a `.env` file?
	'secret_key' => 'abc123',

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
