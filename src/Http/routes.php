<?php

Route::get('demo/test', function () {
	return 'Test';
});

Route::get('demo/hello', function () {
	return Demo::hello();
});

Route::get('demo/view', function () {
	return view('websanova-demo::index');
});

Route::get('demo', 'Websanova\Demo\Http\DemoController@index');