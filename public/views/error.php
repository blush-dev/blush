<?php $engine->include( 'parts/header' ) ?>

	<div class="app-content border-box overflow-hidden relative max-w-full mx-auto pt-16 text-xl leading-loose">
		<main class="app-main mx-auto mb-12 border-box">

			<?php if ( isset( $query ) ) : ?>
				<header class="archive-header max-w-2xl mx-auto px-8 sm:px-0">
					<h1 class="archive-header__title"><span class="highlight"><?= e( $query->title() ) ?></span></h1>
				</header>

				<?php if ( $desc = $query->content() ) : ?>
					<div class="entry__content o-content-width mt-8">
						<?= $desc ?>
					</div>
				<?php endif ?>
			<?php endif ?>

		</main>
	</div>

<?php $engine->include( 'parts/footer' ) ?>
