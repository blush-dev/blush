<?php $engine->include( 'parts/header' ) ?>

<div class="app-content">
	<?php $engine->includeWhen( $single, 'parts/collection-header' ) ?>

	<div class="collection">
		<?php $engine->each( 'parts/entry-summary', $collection, 'entry' ) ?>
	</div>

	<?php $engine->includeWhen( $pagination, 'parts/pagination' ) ?>
</div>

<?php $engine->include( 'parts/footer' ) ?>
