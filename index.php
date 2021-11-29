<?php

/*
 * Sample addon for Bear Framework
 * https://github.com/bearframework/sample-addon
 * Copyright (c) 2016 Ivo Petkov
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app->routes->add('/addon/', function () {
    return new App\Response('The sample addon has rendered this page.');
});
