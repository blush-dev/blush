<?php $engine->include( 'parts/header' ) ?>

	<div class="app-content border-box overflow-hidden relative max-w-full mx-auto pt-16 text-xl leading-loose">
		<main class="app-main mx-auto mb-12 border-box">

			<?php $engine->includeWhen( isset( $query ), 'parts/collection-header' ) ?>

			<div class="collection-list o-content-width mt-16">
				<?php $engine->each( 'parts/entry-summary', $entries->all(), 'entry' ) ?>
			</div>

			<?php $engine->include( 'parts/pagination' ) ?>
		</main>
	</div>

<?php $engine->include( 'parts/footer' ) ?>