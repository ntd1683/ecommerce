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
