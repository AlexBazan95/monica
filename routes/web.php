<?php

//Dash redirect
//Route::redirect('/', '/dashboard');
Route::get('/', 'FrontController@renderFrontend');

//Locale
Route::get('setlocale/{locale}', function ($locale) {

    if (in_array($locale, \Config::get('app.locales'))) { 
    	Session::put('locale', $locale);
    }

    return redirect()->back();
});

Auth::routes(['verify' => true]);
Route::get('mail/send', 'MailController@send');

//Dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Customers
Route::redirect('/customers', '/customers/leads/list');
Route::prefix('/customers')->group(function () {
	//Clients
    Route::get('clients/list', 'CustomersController@getClients')->name('clients');
    Route::get('clients/{id}', 'CustomersController@getClient');
    Route::post('clients/add', 'CustomersController@addClient');
    Route::post('clients/update/{id}', 'CustomersController@updateClient');
    //Leads
    Route::get('leads/list', 'CustomersController@getLeads')->name('leads');
    Route::get('leads/{id}', 'CustomersController@getLead');
    Route::post('leads/add', 'CustomersController@addLead');
    Route::post('leads/update/{id}', 'CustomersController@updateLead');
    //Visitors
    Route::get('visitors/list', 'CustomersController@getVisitors')->name('visitors');
    Route::post('visitors/add', 'FrontController@addVisitor');
});

//Orders
Route::redirect('/orders', '/orders/list');
Route::prefix('/orders')->group(function () {
    Route::get('list', 'OrdersController@getOrders')->name('orders');
    Route::get('{id}', 'OrdersController@getOrder');
    Route::post('update/{id}', 'OrdersController@updateOrder');
    Route::post('add', 'OrdersController@addOrder');
});

//Products
Route::redirect('/products', '/products/list');
Route::prefix('/products')->group(function () {
    Route::get('list', 'ProductsController@getProducts');
    Route::get('{id}', 'ProductsController@getProduct');
    Route::post('add', 'ProductsController@addProduct');
    Route::post('update/{id}', 'ProductsController@updateProduct');
});

//Tasks
Route::redirect('/tasks', '/tasks/list');
Route::prefix('/tasks')->group(function () {
    Route::get('list', 'TasksController@getTasks')->name('tasks');
    Route::get('{id}', 'TasksController@getTask');
    Route::post('update/{id}', 'TasksController@updateTask');
    Route::post('add', 'TasksController@addTask');
});

//Settings
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::post('/settings/update/{id}', 'SettingsController@updateSetting');

//Users
Route::get('/users', 'UsersController@index')->name('users');
Route::post('/users/add', 'UsersController@addUser');
Route::post('/users/update/{id}', 'UsersController@updateUser');

//Front
Route::redirect('/frontend', '/frontend/landing');
Route::prefix('/frontend')->group(function () {
	//Landing
	Route::get('landing', 'LandingController@getLanding');
	Route::post('add', 'LandingController@addBlock');
	Route::post('update', 'LandingController@updateLanding');
});

Route::get('/knowledge', 'LandingController@knowledge')->name('settings');
