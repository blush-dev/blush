<article class="entry mb-16">

	<header class="entry__header max-w-2xl mx-8 sm:mx-auto">
		<div class="entry__byline text-gray-600 font-secondary">
			<?= e( $entry->date() ) ?>
		</div>

		<h2 class="entry__title m-0 mt-3">
			<a class="text-gray-800 no-underline hover:underline hover:highlight border-0" href="<?= e( $entry->uri() ) ?>"><?= e( $entry->title() ) ?></a>
		</h2>
	</header>

	<div class="entry__summary o-content-width mt-4">
		<?= $entry->excerpt( 50, sprintf(
			' &hellip; <a class="entry__more-link" href="%s">Continue reading&nbsp;&rarr;</a>',
			e( $entry->uri() )
		) ) ?>
	</div>

</article>
