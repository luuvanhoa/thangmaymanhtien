<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Trang chủ', route('home'));
});

// Dashboard
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Bảng điều khiển', route('dashboard'));
});

// User
Breadcrumbs::register('user-list', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Danh sách người dùng', route('user-list'));
});
Breadcrumbs::register('user-add', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Thêm người dùng mới', route('user-add'));
});
Breadcrumbs::register('user-edit', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('user-list');
    $breadcrumbs->push($user->username, route('user-edit', $user->id));
});

// Banner
Breadcrumbs::register('banner', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Danh sách hình ảnh quảng cáo', route('banner'));
});
Breadcrumbs::register('banner-add', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Thêm hình ảnh quảng cáo', route('banner-add'));
});
Breadcrumbs::register('banner-edit', function ($breadcrumbs, $banner) {
    $breadcrumbs->parent('banner');
    $breadcrumbs->push('Chỉnh sửa hình ảnh quảng cáo', route('banner-edit', $banner->id));
});

// Categories
Breadcrumbs::register('category', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Danh sách danh mục', route('category'));
});
Breadcrumbs::register('category-add', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Thêm hình danh mục', route('category-add'));
});
Breadcrumbs::register('category-edit', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('category');
    $breadcrumbs->push('Chỉnh sửa danh mục', route('category-edit', $category->id));
});

// Post
Breadcrumbs::register('post', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Danh sách bài viết', route('post'));
});
Breadcrumbs::register('post-add', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Thêm hình bài viết', route('post-add'));
});
Breadcrumbs::register('post-edit', function ($breadcrumbs, $product) {
    $breadcrumbs->parent('post');
    $breadcrumbs->push('Chỉnh sửa bài viết', route('post-edit', $product->id));
});

