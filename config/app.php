<?php
# App configuration.

return [
	// URL to the site.
	'uri' => env( 'APP_URI', 'http://localhost' ),

	// Custom title for the site.
	'title' => 'Blush',

	// Custom tagline for the site.
	'tagline' => 'Yet another good morning',

	// Select from a list of supported timezones:
	// https://www.php.net/manual/en/timezones.php
	'timezone' => 'America/Chicago',

	// Select from a list of supported date and time formats:
	// https://www.php.net/manual/en/datetime.formats.date.php
	'date_format' => 'F j, Y',
	'time_format' => 'g:i a',

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
