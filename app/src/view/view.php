<?php

include 'web.php';

$request = new Request($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);

Route::loadPage($request->url);