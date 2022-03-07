<?php $engine->view( 'header', [], [ 'title' => $title ?? '' ] )->display() ?>

	<div class="app-content border-box overflow-hidden relative max-w-full mx-auto pt-16 text-xl leading-loose">
		<main class="app-main mx-auto mb-12 border-box">

			<?php if ( isset( $query ) ) : ?>
				<header class="archive-header max-w-2xl mx-auto px-8 sm:px-0">
					<h1 class="archive-header__title"><span class="highlight"><?= e( $query->title() ) ?></span></h1>

					<?php if ( $desc = $query->content() ) : ?>
						<div class="archive-header__description"><?= $desc ?></div>
					<?php endif ?>
				</header>
			<?php endif ?>

			<div class="collection-list o-content-width mt-8">
				<ul>
					<?php foreach ( $entries->all() as $entry ) : ?>
						<li><a href="<?= $entry->uri() ?>"><?= $entry->title() ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>

			<?php $engine->view( 'pagination', [], $data )->display() ?>
		</main>
	</div>

<?php $engine->view( 'footer' )->display() ?>
