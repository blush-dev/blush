<header class="archive-header max-w-2xl mx-auto px-8 sm:px-0">
	<h1 class="archive-header__title"><span class="highlight"><?= e( $single->title() ) ?></span></h1>

	<?php if ( $content = $single->content() ) : ?>
		<div class="archive-header__description"><?= $content ?></div>
	<?php endif ?>
</header>
