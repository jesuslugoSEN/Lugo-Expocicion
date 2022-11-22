<?php
require_once 'vendor/autoload.php';

 use App\Router;

session_start();
define('STORAGE_PATH' . 'storage');

$router = new App\Router();



$router
    ->get('/', [App\classes\Home::class,'index'])
    ->post('/upload', [App\classes\Home::class,'upload'])
    ->get('/Invoices', [App\classes\Invoice::class,'index'])
    ->get('/Invoices/create', [App\classes\Invoice::class,'create'])
    ->post('/Invoices/create', [App\classes\Invoice::class,'store']);


echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));



var_dump($_COOKIE);
