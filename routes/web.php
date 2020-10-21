<?php


Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/about',
    function () {
        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
        return view('tassy::admin/about/index');
    }
)->name('admin/about');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/help',
    function () {
        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
        return view('tassy::admin/help/index');
    }
)->name('admin/help');


Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/config',
    function () {
        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
        return view('tassy::admin/config/index');
    }
)->name('admin/config');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/dev',
    function () {
        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
        return view('tassy::admin/dev/index');
    }
)->name('admin/dev');
