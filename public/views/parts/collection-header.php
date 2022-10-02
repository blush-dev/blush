<header class="archive-header">
	<h1 class="archive-header__title"><?= e( $single->title() ) ?></h1>

	<?php if ( $content = $single->content() ) : ?>
		<div class="archive-header__description"><?= $content ?></div>
	<?php endif ?>
</header>
