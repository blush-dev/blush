	<footer class="app-footer py-8 font-secondary text-center text-xl border-b-2 border-blue-200">
		<p class="app-footer__credit text-gray-600">
			<?= Blush\PoweredBy::render() ?>
		</p>

		<div class="menu menu--social mt-2">
			<ul class="menu__items list-none text-center p-0">
				<li class="menu__item inline-block">
					<a class="menu__link menu__link--github inline-block m-3 text-gray-500 border-0" href="https://github.com/justintadlock/"><?php include( path( 'public/svg/github-brands.svg.php' ) ) ?><span class="screen-reader-text">GitHub</span></a>
				</li>
				<li class="menu__item inline-block">
					<a class="menu__link menu__link--twitter inline-block m-3 text-gray-500 border-0" href="https://twitter.com/justintadlock"><?php include( path( 'public/svg/twitter-brands.svg.php' ) ) ?><span class="screen-reader-text">Twitter</span></a>
				</li>
				<li class="menu__item inline-block">
					<a class="menu__link menu__link--facebook inline-block m-3 text-gray-500 border-0" href="https://facebook.com/justintadlock"><?php include( path( 'public/svg/facebook-brands.svg.php' ) ) ?><span class="screen-reader-text">Facebook</span></a>
				</li>
				<li class="menu__item inline-block">
					<a class="menu__link menu__link--amazon inline-block m-3 text-gray-500 border-0" href="http://a.co/02ggsr2"><?php include( path( 'public/svg/amazon-brands.svg.php' ) ) ?><span class="screen-reader-text">Amazon Wish List</span></a>
				</li>
			</ul>
		</div>
	</footer>

</div><!-- .app -->

<script>
	let menu   = document.querySelector( '.menu--primary' );
	let toggle = document.querySelector( '.toggle--menu-primary .toggle__button' );
	let burger = document.querySelector( '.toggle--menu-primary .toggle__hamburger' );
	let svg_x  = document.querySelector( '.toggle--menu-primary .toggle__x' );

	if ( null !== menu && null !== toggle ) {

		toggle.onclick = () => {
			menu.classList.toggle( 'hidden' );
			burger.classList.toggle( 'hidden' );
			svg_x.classList.toggle( 'hidden' );
		}
	}
</script>

</body>
</html>
