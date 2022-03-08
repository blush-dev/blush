<?php

use Blush\Core\Application;

# ------------------------------------------------------------------------------
# Autoload.
# ------------------------------------------------------------------------------
#
# Auto-load classes and files via the Composer autoloader.

require_once 'vendor/autoload.php';

# ------------------------------------------------------------------------------
# Create a new application.
# ------------------------------------------------------------------------------
#
# Creates or gets the instances of the Blush application. Access this instance
# via the `app()` function or `\Blush\App` static class after the application
# has booted.

$app = new Application( __DIR__ );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# Calls the application `boot()` method, which launches the application. Pat
# yourself on the back for a job well done.

$app->boot();

# ------------------------------------------------------------------------------
# Run the application.
# ------------------------------------------------------------------------------
#
# Handles the current request and sends the response back to the browser.
#
# @todo This will use the Symfony HTTP Kernel in the future.
# @link https://symfony.com/doc/current/components/http_kernel.html

$app->router->response()->send();
