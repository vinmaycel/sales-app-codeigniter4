<?php

use App\Controllers\CategoryController;
use App\Controllers\DashboardController;
use App\Controllers\TestsController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/admin', [DashboardController::class,  'index']);
$routes->get('/admin/category/new', [CategoryController::class,  'new']);
$routes->post('/admin/category', [CategoryController::class,  'store']);
$routes->get('/admin/category', [CategoryController::class,  'index']);
$routes->get('/admin/category/(:segment)', [CategoryController::class,  'show']);
$routes->get('/admin/category/(:segment)/edit', [CategoryController::class,  'edit']);
$routes->put('/admin/category/(:segment)', [CategoryController::class,  'update']);
$routes->delete('/admin/category/(:segment)', [CategoryController::class,  'delete']);


$routes->get('/admin/test', [TestsController::class,  'index']);
$routes->get('/admin/test/new', [TestsController::class,  'new']);
$routes->post('/admin/test', [TestsController::class,  'store']);
$routes->get('/admin/test', [TestsController::class,  'index']);
$routes->get('/admin/test/(:segment)', [TestsController::class,  'show']);
$routes->get('/admin/test/(:segment)/edit', [TestsController::class,  'edit']);
$routes->put('/admin/test/(:segment)', [TestsController::class,  'update']);
$routes->delete('/admin/test/(:segment)', [TestsController::class,  'delete']);


$routes->resource('admin/product',['controller'=>'ProductController']);