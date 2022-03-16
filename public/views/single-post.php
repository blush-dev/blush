<?php $engine->include( 'parts/header' ) ?>

<div class="app-content border-box overflow-hidden relative max-w-full mx-auto pt-16 text-xl leading-loose">
	<main class="app-main mx-auto mb-12 border-box">
		<article class="entry entry--single">

			<header class="entry__header max-w-2xl mx-8 sm:mx-auto">
				<h1 class="entry__title m-0"><span class="highlight"><?= e( $single->title() ) ?></span></h1>
			</header>

			<div class="entry__content o-content-width mt-12">
				<?= $single->content() ?>
			</div>

			<footer class="entry__footer clear max-w-2xl mx-8 sm:mx-auto my-8 text-gray-600 font-secondary text-xl">
				<?php if ( $tags = $single->terms( 'tag' ) ) : ?>
					<div class="entry__tags">
						Tagged:
						<?php foreach ( $tags as $tag ) : ?>
							<a class="mx-1 border-0 no-underline hover:underline" href="<?= e( $tag->uri() ) ?>">#<?= e( $tag->title() ) ?></a>
						<?php endforeach ?>
					</div>
				<?php endif ?>
			</footer>

		</article>
	</main>
</div>

<?php $engine->include( 'parts/footer' ) ?>
