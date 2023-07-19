<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('index'));
});

// About Us

Breadcrumbs::for('aboutUs', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('About US'), route('about-us'));
});

// Contact Us

Breadcrumbs::for('contactUs', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('Contact US'), route('contact-us'));
});

// Account
Breadcrumbs::for('account', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('Account'), route('account'));
});

// Cart
Breadcrumbs::for('cart', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('Your Shopping Cart'), route('cart'));
});

// Shop Grid 3 Column
Breadcrumbs::for('shopGridLeftSideBar', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('Shop Grid Left Side Bar'), route('shop-grid-left-sidebar'));
});

// Error
Breadcrumbs::for('404Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('404 Not Found'));
});

// Error
Breadcrumbs::for('401Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('401 Not Found'));
});

// Error
Breadcrumbs::for('402Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('402 Not Found'));
});

// Error
Breadcrumbs::for('403Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('403 Not Found'));
});

// Error
Breadcrumbs::for('419Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('419 Not Found'));
});

// Error
Breadcrumbs::for('429Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('429 Not Found'));
});

// Error
Breadcrumbs::for('500Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('500 Not Found'));
});

// Error
Breadcrumbs::for('503Error', function ($trail) {
    $trail->parent('home');
    $trail->push(trans('503 Not Found'));
});
