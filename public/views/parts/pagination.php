<?php if ( $entries->total() > $entries->count() ) :

	$request = preg_replace( '/\/page\/\d+/', '', \Blush\App::resolve( 'router' )->path() );

	$dots = false;

	$current = intval( $data['page'] );
	$end_size = 1;
	$mid_size = 1;
	$total = ceil( $entries->total() / $entries->number() ); ?>

	<nav class="pagination clear mt-8 text-center">

		<ul class="pagination__items list-none inline-block m-0 p-0">

	<?php if ( 1 < $current ) :

		if ( 2 < $current ) :
			$page = $current - 1;
			$uri = Blush\App::resolve( 'uri/relative' ) . rtrim( $request, '/' ) . '/page/' . $page;
		else :
			$uri = Blush\App::resolve( 'uri/relative' ) . rtrim( $request, '/' );
		endif; ?>

		<li class="pagination__item pagination__item--prev inline-block text-base font-600">
			<a class="pagination__anchor pagination__anchor--link block py-3 px-6 border border-gray-200 no-underline hover:underline" href="<?= e( $uri ) ?>">&larr; Previous</a>
		</li>

	<?php endif; ?>

	<?php for ( $i = 1; $i <= ceil( $entries->total() / $entries->number() ); $i++ ) : ?>

		<?php if ( $current === $i ) : ?>

			<li class="pagination__item pagination__item--num pagination__item--current inline-block text-base font-600">
				<span class="pagination__anchor pagination__anchor--current block py-3 px-6 border border-gray-200"><?= $i ?></span>
			</li>

			<?php $dots = true;

		else :

			if ( $i <= $end_size || ( $current && $i >= $current - $mid_size && $i <= $current + $mid_size ) || $i > $total - $end_size ) :


				if ( 1 != $i ) :
					$uri = Blush\App::resolve( 'uri/relative' ) . rtrim( $request, '/' ) . '/page/' . $i;
				else :
					$uri = Blush\App::resolve( 'uri/relative' ) . rtrim( $request, '/' );
				endif; ?>

				<li class="pagination__item pagination__item--num inline-block text-base font-600">
					<a class="pagination__anchor pagination__anchor--link hidden sm:block py-3 px-6 border border-gray-200 no-underline hover:underline" href="<?= e( $uri ) ?>"><?= $i ?></a>
				</li>

				<?php $dots = true;

			elseif ( $dots ) : ?>

				<li class="pagination__item pagination__item--dots inline-block text-base font-600">
					<span class="pagination__anchor pagination__anchor--dots hidden sm:block py-3 px-6 border border-gray-200">&hellip;</span>
				</li>

				<?php $dots = false;
			endif;

		endif;

	endfor;

	if ( $current < $total ) :

		$page = $current + 1;
		$uri = Blush\App::resolve( 'uri/relative' ) . rtrim( $request, '/' ) . '/page/' . $page; ?>

		<li class="pagination__item pagination__item--next inline-block text-base font-600">
			<a class="pagination__anchor pagination__anchor--link block py-3 px-6 border border-gray-200 no-underline hover:underline" href="<?= e( $uri ) ?>">Next &rarr;</a>
		</li>

	<?php endif; ?>

	</ul>
	</nav>

<?php endif; ?>
