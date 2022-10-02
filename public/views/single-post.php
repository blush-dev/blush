<?php $engine->include( 'parts/header' ) ?>

<div class="app-content">
	<article class="entry entry--single">

		<header class="entry__header">
			<div class="entry__byline"><?= e( $single->date() ) ?></div>
			<h1 class="entry__title"><?= e( $single->title() ) ?></h1>
		</header>

		<div class="entry__content">
			<?= $single->content() ?>
		</div>

		<footer class="entry__footer">
			<?php if ( $tags = $single->terms( 'tag' ) ) : ?>
				<div class="entry__terms entry__terms--tag">
					Tagged:
					<?php foreach ( $tags as $tag ) : ?>
						<a href="<?= e( $tag->uri() ) ?>">#<?= e( $tag->title() ) ?></a>
					<?php endforeach ?>
				</div>
			<?php endif ?>
		</footer>

	</article>
</div>

<?php $engine->include( 'parts/footer' ) ?>
