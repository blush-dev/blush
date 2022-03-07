<?php
# Markdown configuration.
#
# Blush uses the League\CommonMark package for handling Markdown and Front
# Matter conversion of content into HTML.  Users modify the configuration and
# add their preferred extensions below.

return [
	// Customize the configuration.
	// https://commonmark.thephpleague.com/2.2/configuration/
	// https://commonmark.thephpleague.com/2.2/security/
	'config' => [
		'renderer' => [
			'soft_break' => '<br />'
		]
	],

	// Register extensions by adding extension class names.
	// https://commonmark.thephpleague.com/2.2/extensions/overview/
	'extensions' => [
		League\CommonMark\Extension\Attributes\AttributesExtension::class,
		League\CommonMark\Extension\Autolink\AutolinkExtension::class,
		League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension::class,
		League\CommonMark\Extension\DescriptionList\DescriptionListExtension::class,
		League\CommonMark\Extension\DisallowedRawHtml\DisallowedRawHtmlExtension::class,
		League\CommonMark\Extension\Footnote\FootnoteExtension::class,
		League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension::class,
		League\CommonMark\Extension\SmartPunct\SmartPunctExtension::class,
		League\CommonMark\Extension\Strikethrough\StrikethroughExtension::class,
		League\CommonMark\Extension\Table\TableExtension::class,
		League\CommonMark\Extension\TaskList\TaskListExtension::class
	]
];
