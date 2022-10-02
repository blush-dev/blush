<!DOCTYPE html>
<html>
<head>
	<?= $doctitle->render() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= e( asset( 'css/style.css' ) ) ?>" />
</head>
<body>

<div class="app relative">

	<header class="app-header sticky md:static z-40 top-0 flex flex-wrap items-center justify-between w-full h-auto bg-white border-blue-200 border-t-2">

		<div class="app-header__branding overflow-hidden flex justify-start items-center md:flex-grow-0 max-w-full h-16 px-8 text-center">
			<h1 class="app-header__title m-0 font-secondary font-400 text-3xl leading-none">
				<a class="app-header__title-link text-gray-700 no-underline hover:underline border-0" href="<?= e( uri() ) ?>"><?= e( config( 'app.title' ) ) ?></a>
			</h1>
		</div>

		<div class="toggle toggle--menu-primary block md:hidden h-16 px-8 flex items-center">
			<button class="toggle__button flex items-center px-3 py-2 rounded-sm border-0">
				<span class="screen-reader-text">Open Menu</span>
				<svg class="toggle__hamburger fill-current h-3 w-3" style="height:20px; width:20px;" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
				<svg class="toggle__x hidden fill-current h-3 w-3" style="height:20px; width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
				</svg>
			</button>
		</div>

		<nav class="menu menu--primary hidden md:block w-full md:h-20 flex-grow md:flex md:items-center md:justify-end md:w-auto ml-auto md:pr-2 text-lg leading-none border-t border-b md:border-0 border-gray-200">
			<ul class="menu__items list-none md:h-full m-0 p-0">
				<li class="menu__item md:inline"><a class="menu__link block md:inline-block px-8 py-3 md:p-6 md:h-full text-gray-700 border-0 no-underline hover:underline" href="<?= e( uri( 'about' ) ) ?>">About</a></li>
				<li class="menu__item md:inline"><a class="menu__link block md:inline-block px-8 py-3 md:p-6 md:h-full text-gray-700 border-0 no-underline hover:underline" href="<?= e( uri( 'blog' ) ) ?>">Blog</a></li>
				<li class="menu__item md:inline"><a class="menu__link block md:inline-block px-8 py-3 md:p-6 md:h-full text-gray-700 border-0 no-underline hover:underline" href="https://github.com/blush-dev/blush">Blush</a></li>
			</ul>
		</nav>

	</header>
