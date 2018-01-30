<?php

$api->get('auth/logout', 'Auth\LoginController@logout');

$api->get('vouchers', 'VoucherController@index');
$api->post('vouchers', 'VoucherController@create');
$api->put('vouchers/{id}', 'VoucherController@update');
$api->delete('vouchers/{id}', 'VoucherController@delete');

$api->get('categories', 'CategoryController@index');
$api->post('categories', 'CategoryController@create');
$api->put('categories/{id}', 'CategoryController@update');
$api->delete('categories/{id}', 'CategoryController@delete');

$api->get('products', 'ProductController@index');
$api->post('products', 'ProductController@create');
$api->put('products/{id}', 'ProductController@update');
$api->delete('products/{id}', 'ProductController@delete');
