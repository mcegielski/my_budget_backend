<?php

/*
 * This file is part of the Slim API skeleton package
 *
 * Copyright (c) 2016 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://github.com/tuupola/slim-api-skeleton
 *
 */

require __DIR__ . "/vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$app = new \Slim\App([
    "settings" => [
        "displayErrorDetails" => true
    ]
]);


require __DIR__ . "/config/logger.php";
require __DIR__ . "/config/handlers.php";
require __DIR__ . "/config/database.php";
require __DIR__ . "/config/middleware.php";

$app->get("/", function ($request, $response, $arguments) {
    print "Here be dragons";
});

require __DIR__ . "/routes/token.php";
require __DIR__ . "/routes/currencies.php";
require __DIR__ . "/routes/categories.php";
require __DIR__ . "/routes/wallets.php";
require __DIR__ . "/routes/transactions.php";

$app->run();
