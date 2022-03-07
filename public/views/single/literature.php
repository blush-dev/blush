<?php $engine->view( 'header', [], [ 'title' => ! empty( $title ) ? $title : '' ] )->display() ?>

	<div class="app-content border-box overflow-hidden relative max-w-full mx-auto pt-16 text-xl leading-loose">
		<main class="app-main mx-auto mb-12 border-box">

			<?php foreach ( $entries->all() as $entry ) : ?>

				<article class="entry entry--single">

					<header class="entry__header max-w-2xl mx-8 sm:mx-auto">
						<h1 class="entry__title m-0"><span class="highlight"><?= e( $entry->title() ) ?></span></h1>
					</header>

					<div class="entry__content o-content-width mt-12">
						<?= $entry->content() ?>
					</div>

					<footer class="entry__footer clear max-w-2xl mx-8 sm:mx-auto my-8 text-gray-600 font-secondary text-xl">
						<?php if ( $entry->terms( 'literary_form' ) ) : ?>
							<span class="entry__topics">
								Form:
								<?php foreach ( $entry->terms( 'literary_form' ) as $term ) : ?>
									<a class="mx-1 border-0 no-underline hover:underline" href="<?= e( $term->uri() ) ?>">#<?= e( $term->title() ) ?></a>
								<?php endforeach ?>
							</span>
						<?php endif ?>
					</footer>
				</article>

			<?php endforeach ?>

		</main>
	</div>

<?php $engine->view( 'footer' )->display() ?>
