<?php

use Core\Router;

// Auth Controllers
Router::add('login', '/login', \App\Controllers\Common\Auth\LoginController::class, 'login');
Router::add('register', '/register', \App\Controllers\Common\Auth\RegisterController::class, 'register');
Router::add('logout', '/logout', \App\Controllers\Common\Auth\LogoutController::class, 'logout');
Router::add('install', '/install', \App\Controllers\Common\InstallController::class, 'install');

// Common Routes
Router::add('index', '/', \App\Controllers\Common\HomeController::class);
Router::add('index2', '/index', \App\Controllers\Common\HomeController::class);

// User Routes
Router::add('feedback', '/feedback', \App\Controllers\Common\ReviewController::class);

// API Routes
Router::add('api_create', '/api/reviews/create', \App\Controllers\User\API\ReviewApiController::class, 'create');
Router::add('api_get', '/api/reviews/get', \App\Controllers\Common\API\ReviewApiController::class);