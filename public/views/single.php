<?php $engine->include( 'parts/header' ) ?>

<div class="app-content">
	<article class="entry entry--single">

		<header class="entry__header">
			<h1 class="entry__title"><?= e( $single->title() ) ?></h1>
		</header>

		<div class="entry__content">
			<?= $single->content() ?>
		</div>

	</article>
</div>

<?php $engine->include( 'parts/footer' ) ?>
