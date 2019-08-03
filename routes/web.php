<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('id','([0-9]*)');
Route::pattern('cid','([0-9]*)');
Route::pattern('slug','(.*)');
Route::pattern('name','(.*)');


Route::namespace('Ship')->group(function(){
	Route::get('', [
		'uses' => 'IndexController@index',
		'as' => 'ship.index.index'
	]);
	Route::get('gioi-thieu', [
		'uses' => 'IndexController@about',
		'as' => 'ship.index.about'
	]);
	Route::get('tin-tuc', [
		'uses' => 'BlogController@index',
		'as' => 'ship.blog.index'
	]);
	Route::get('tin-tuc/{slug}', [
		'uses' => 'BlogController@blog',
		'as' => 'ship.blog.blog'
	]);
	Route::get('tim-kiem', [
		'uses' => 'BlogController@search',
		'as' => 'ship.blog.search'
	]);
	Route::get('{slug}-{id}.html', [
		'uses' => 'BlogController@detail',
		'as' => 'ship.blog.detail'
	]);
	Route::get('dat-ve-tau-{slug}', [
		'uses' => 'ShipController@index',
		'as' => 'ship.ship.index'
	]);
	Route::get('gio-hang', [
		'uses' => 'ShipController@getCart',
		'as' => 'ship.ship.cart'
	]);
	Route::post('gio-hang', [
		'uses' => 'ShipController@cart',
		'as' => 'ship.ship.cart'
	]);
	Route::post('update-cart', [
		'uses' => 'ShipController@updateCart',
		'as' => 'ship.ship.updateCart'
	]);
	Route::get('dat-ve-thanh-cong', [
		'uses' => 'ShipController@thank',
		'as' => 'ship.ship.thank'
	]);
	Route::post('thanh-toan', [
		'uses' => 'ShipController@payment',
		'as' => 'ship.ship.payment'
	]);
	Route::get('thue-xe', [
		'uses' => 'CarController@index',
		'as' => 'ship.car.index'
	]);
	Route::get('thue-xe/{slug}', [
		'uses' => 'CarController@detail',
		'as' => 'ship.car.detail'
	]);
	Route::get('dat-phong-khach-san', [
		'uses' => 'HotelController@index',
		'as' => 'ship.hotel.index'
	]);
	Route::post('dat-phong-khach-san', [
		'uses' => 'HotelController@checkout',
		'as' => 'ship.hotel.checkout'
	]);
	Route::get('cart-{name}', [
		'uses' => 'HotelController@cart',
		'as' => 'ship.hotel.cart'
	]);
	Route::get('khach-san/{slug}', [
		'uses' => 'HotelController@detail',
		'as' => 'ship.hotel.detail'
	]);
	Route::get('dat-phong-thanh-cong', [
		'uses' => 'HotelController@thank',
		'as' => 'ship.hotel.thank'
	]);
});
Route::namespace('Auth')->group(function(){
	Route::get('login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'auth.auth.login'
	]);
	Route::post('login', [
		'uses' => 'AuthController@postLogin',
		'as' => 'auth.auth.login'
	]);
	Route::get('logout', [
		'uses' => 'AuthController@logout',
		'as' => 'auth.auth.logout'
	]);
});

Route::namespace('Ajax')->group(function(){
	Route::get('activePost', [
		'uses' => 'AdminController@activePost',
		'as' => 'ajax.admin.post'
	]);
	Route::get('activeCar', [
		'uses' => 'AdminController@activeCar',
		'as' => 'ajax.admin.car'
	]);
	Route::get('activeHotel', [
		'uses' => 'AdminController@activeHotel',
		'as' => 'ajax.admin.hotel'
	]);
	Route::get('activeClient', [
		'uses' => 'AdminController@activeClient',
		'as' => 'ajax.admin.client'
	]);
	Route::get('deletePicture', [
		'uses' => 'AdminController@picture',
		'as' => 'ajax.admin.picture'
	]);
	Route::get('deleteTicket', [
		'uses' => 'ShipController@delete',
		'as' => 'ajax.ship.delete'
	]);
	Route::get('deleteHotel', [
		'uses' => 'ShipController@deleteHotel',
		'as' => 'ajax.ship.deleteHotel'
	]);
});

Route::namespace('Admin')->middleware('auth')->group(function(){
// Index ADMIN	
	Route::prefix('admin')->group(function(){
		Route::get('', [
			'uses' => 'IndexController@index',
			'as' => 'admin.index.index'
		]);
	//tag
		Route::prefix('train')->group(function(){
			Route::get('', [
				'uses' => 'TrainController@index',
				'as' => 'admin.train.index'
			]);
			Route::get('add', [
				'uses' => 'TrainController@getAdd',
				'as' => 'admin.train.add'
			]);
			Route::post('add', [
				'uses' => 'TrainController@postAdd',
				'as' => 'admin.train.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'TrainController@getEdit',
				'as' => 'admin.train.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'TrainController@postEdit',
				'as' => 'admin.train.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'TrainController@delete',
				'as' => 'admin.train.delete'
			]);
				
				Route::get('{id}/add', [
					'uses' => 'CostController@getAdd',
					'as' => 'admin.cost.add'
				]);
				Route::post('{id}/add', [
					'uses' => 'CostController@postAdd',
					'as' => 'admin.cost.add'
				]);
				Route::get('{id}/edit/{cid}', [
					'uses' => 'CostController@getEdit',
					'as' => 'admin.cost.edit'
				]);
				Route::post('{id}/edit/{cid}', [
					'uses' => 'CostController@postEdit',
					'as' => 'admin.cost.edit'
				]);
				Route::get('{id}/delete/{cid}', [
					'uses' => 'CostController@delete',
					'as' => 'admin.cost.delete'
				]);

		});
		
		Route::prefix('car')->group(function(){
			Route::get('', [
				'uses' => 'CarController@index',
				'as' => 'admin.car.index'
			]);
			Route::get('add', [
				'uses' => 'CarController@getAdd',
				'as' => 'admin.car.add'
			]);
			Route::post('add', [
				'uses' => 'CarController@postAdd',
				'as' => 'admin.car.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'CarController@getEdit',
				'as' => 'admin.car.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'CarController@postEdit',
				'as' => 'admin.car.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'CarController@delete',
				'as' => 'admin.car.delete'
			]);
		});

		Route::prefix('hotel')->group(function(){
			Route::get('', [
				'uses' => 'HotelController@index',
				'as' => 'admin.hotel.index'
			]);
			Route::get('add', [
				'uses' => 'HotelController@getAdd',
				'as' => 'admin.hotel.add'
			]);
			Route::post('add', [
				'uses' => 'HotelController@postAdd',
				'as' => 'admin.hotel.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'HotelController@getEdit',
				'as' => 'admin.hotel.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'HotelController@postEdit',
				'as' => 'admin.hotel.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'HotelController@delete',
				'as' => 'admin.hotel.delete'
			]);
				Route::get('{id}/add', [
					'uses' => 'TypeController@getAdd',
					'as' => 'admin.type.add'
				]);
				Route::post('{id}/add', [
					'uses' => 'TypeController@postAdd',
					'as' => 'admin.type.add'
				]);
				Route::get('{id}/edit/{cid}', [
					'uses' => 'TypeController@getEdit',
					'as' => 'admin.type.edit'
				]);
				Route::post('{id}/edit/{cid}', [
					'uses' => 'TypeController@postEdit',
					'as' => 'admin.type.edit'
				]);
				Route::get('{id}/delete/{cid}', [
					'uses' => 'TypeController@delete',
					'as' => 'admin.type.delete'
				]);
		});

		Route::prefix('category')->group(function(){
			Route::get('', [
				'uses' => 'CategoryController@index',
				'as' => 'admin.category.index'
			]);
			Route::get('add', [
				'uses' => 'CategoryController@getAdd',
				'as' => 'admin.category.add'
			]);
			Route::post('add', [
				'uses' => 'CategoryController@postAdd',
				'as' => 'admin.category.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'CategoryController@getEdit',
				'as' => 'admin.category.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'CategoryController@postEdit',
				'as' => 'admin.category.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'CategoryController@delete',
				'as' => 'admin.category.delete'
			]);
		});

		Route::prefix('post')->group(function(){
			Route::get('', [
				'uses' => 'DetailController@index',
				'as' => 'admin.detail.index'
			]);
			Route::get('add', [
				'uses' => 'DetailController@getAdd',
				'as' => 'admin.detail.add'
			]);
			Route::post('add', [
				'uses' => 'DetailController@postAdd',
				'as' => 'admin.detail.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'DetailController@getEdit',
				'as' => 'admin.detail.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'DetailController@postEdit',
				'as' => 'admin.detail.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'DetailController@delete',
				'as' => 'admin.detail.delete'
			]);
		});

		Route::prefix('users')->group(function(){
			Route::get('', [
				'uses' => 'UsersController@index',
				'as' => 'admin.users.index'
			]);
			Route::get('add', [
				'uses' => 'UsersController@getAdd',
				'as' => 'admin.users.add'
			]);
			Route::post('add', [
				'uses' => 'UsersController@postAdd',
				'as' => 'admin.users.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'UsersController@getEdit',
				'as' => 'admin.users.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'UsersController@postEdit',
				'as' => 'admin.users.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'UsersController@delete',
				'as' => 'admin.users.delete'
			]);
		});
		Route::prefix('contact')->group(function(){
			Route::get('', [
				'uses' => 'ContactController@index',
				'as' => 'admin.contact.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'ContactController@delete',
				'as' => 'admin.contact.delete'
			]);
		});
		Route::prefix('client')->group(function(){
			Route::get('', [
				'uses' => 'ClientController@index',
				'as' => 'admin.client.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'ClientController@delete',
				'as' => 'admin.client.delete'
			]);
		});
		Route::prefix('cart')->group(function(){
			Route::get('', [
				'uses' => 'CartController@index',
				'as' => 'admin.cart.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'CartController@delete',
				'as' => 'admin.cart.delete'
			]);
		});
	});
});