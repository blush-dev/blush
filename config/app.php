<?php
# App configuration.

return [
	// URL to the site.
	'uri' => 'http://localhost/blush',

	// A custom title for the site.
	'title' => 'Blush',

	// Custom description/tagline for the site.
	'description' => 'Yet another good morning',

	// Select from a list of supported timezones:
	// https://www.php.net/manual/en/timezones.php
	'timezone' => 'America/Chicago',

	// Set the homepage to show a custom content type collection. This
	// should be the content type name/type (e.g., `post`) set in the
	// `/config/content.php` configuration file.  Leave empty to show the
	// normal homepage.
	'home_alias' => '',

	// Register service providers.
	'providers' => [],

	// Register static proxies classes.
	'proxies' => []
];
