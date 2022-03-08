<?php $format = 'standard';//$entry->meta( 'format' ); ?>

<article class="entry entry--format-<?= $format ? e( $format ) : 'standard' ?> mb-16">

	<?php if ( 'aside' !== $format ) : ?>

		<header class="entry__header max-w-2xl mx-8 sm:mx-auto">

			<div class="entry__byline text-gray-600 font-secondary">
				<?php if ( $entry->date() ) : ?>
					<?= e( $entry->date() ) ?>
				<?php endif ?>
			</div>

			<h2 class="entry__title m-0 mt-3">
				<a class="text-gray-800 no-underline hover:underline hover:highlight border-0" href="<?= e( $entry->uri() ) ?>"><?= e( $entry->title() ) ?></a>
			</h2>

		</header>

	<?php endif ?>

	<?php if ( 'aside' === $format ) : ?>
		<div class="entry__content max-w-full sm:max-w-3xl mx-auto p-8 font-secondary text-xl bg-yellow-100 border-t-2 border-b-2 border-gray-100">
			<?= $entry->content() ?>
		</div>
	<?php else : ?>
		<div class="entry__summary o-content-width mt-4">
			<?= $entry->excerpt(
				50,
				sprintf(
					' &hellip; <a class="entry__more-link" href="%s">Continue reading&nbsp;&rarr;</a>',
					e( $entry->uri() )
				)
			) ?>
		</div>
	<?php endif ?>

</article>
