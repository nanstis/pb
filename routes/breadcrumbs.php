<?php

// routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Partner;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Partner
Breadcrumbs::for('partner', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Become Partner', route('partner'));
});

// Home > Advertisement
Breadcrumbs::for('advertisement', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Advertisement', route('advertisements.index'));
});

// Home > Advertisement > Show
Breadcrumbs::for('advertisement.show', function (BreadcrumbTrail $trail, Partner $partner) {
    $trail->parent('advertisement');
    $trail->push($partner->name, route('advertisements.show', $partner));
});

// Home > Partner > Create
Breadcrumbs::for('partner.create', function (BreadcrumbTrail $trail) {
    $trail->parent('partner');
    $trail->push('Create', route('partners.create'));
});

// Home > Partner > Index
Breadcrumbs::for('partner.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Partnerships', route('partners.index'));
});

// Home > Partner > Show
Breadcrumbs::for('partner.show', function (BreadcrumbTrail $trail, Partner $partner) {
    $trail->parent('partner.index');
    $trail->push($partner->name, route('partners.show', $partner));
});


