<?php $engine->view( 'header', [], [ 'title' => $title ] )->display() ?>

	<div class="app-content border-box overflow-hidden relative max-w-full mx-auto pt-16 text-xl leading-loose">
		<main class="app-main mx-auto mb-12 border-box">

			<header class="archive-header max-w-2xl mx-auto px-8 sm:px-0">
				<h1 class="archive-header__title"><span class="highlight">Nothing to see here...</span></h1>
			</header>

			<div class="entry__content o-content-width mt-8">
				<p>This is a 404 page.</p>
			</div>
		</main>
	</div>

<?php $engine->view( 'footer' )->display() ?>
