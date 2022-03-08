<header class="archive-header max-w-2xl mx-auto px-8 sm:px-0">
	<h1 class="archive-header__title"><span class="highlight"><?= e( $query->title() ) ?></span></h1>

	<?php if ( $desc = $query->content() ) : ?>
		<div class="archive-header__description"><?= $desc ?></div>
	<?php endif ?>
</header>
