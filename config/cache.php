<?php
# Cache configuration.

return [
	// Key used for purging the cache.
	// yoursite.com/purge/cache/{$key}
	// yoursite.com/purge/cache/content/{$key}
	// yoursite.com/purge/cache/global/{$key}
	'purge_key' => env( 'PURGE_KEY' ),

	// Set a default cache expiration time. This should be a time in seconds.
	// If set to 0, cached data will remain until it is purged or the system
	// triggers a flush. Individual cache implementations may override this
	// expiration date. You may use one of the following constants provided
	// by the framework for quickly adding a time:
	//
	// MINUTE_IN_SECONDS | HOUR_IN_SECONDS | DAY_IN_SECONDS
	// WEEK_IN_SECONDS  | MONTH_IN_SECONDS | YEAR_IN_SECONDS
	'expires' => 0,

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
	'global_exclude' => [],

	// Advanced usage.  Define custom cache stores.
	'stores' => [],

	// Advanced usage.  Define custom cache drivers.
	'drivers' => []
];
