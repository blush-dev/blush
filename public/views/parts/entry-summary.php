<article class="entry">

	<header class="entry__header">
		<div class="entry__byline">
			<?= e( $entry->date() ) ?>
		</div>
		<h2 class="entry__title">
			<a href="<?= e( $entry->uri() ) ?>"><?= e( $entry->title() ) ?></a>
		</h2>
	</header>

	<div class="entry__summary">
		<?= $entry->excerpt( 50, sprintf(
			' &hellip; <a class="entry__more-link" href="%s">Continue reading&nbsp;&rarr;</a>',
			e( $entry->uri() )
		) ) ?>
	</div>

</article>
