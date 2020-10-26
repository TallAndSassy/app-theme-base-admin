<?php
Route::get('/admin', fn () => redirect('/admin/dashboard'));

Route::middleware(['auth:sanctum', 'verified'])
    ->get(
        '/admin/help/{sublevels?}',
        [\TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin\HelpController::class, 'getFrontView']
    )
    ->where('sublevels', '.*');



Route::middleware(['auth:sanctum', 'verified'])
    ->get(
        '/admin/dashboard/{sublevels?}',
        [\TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin\DashboardController::class, 'getFrontView'] // syntax works
    )
    ->where('sublevels', '.*');


Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/about/{sublevels?}',
    [\TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin\AboutController::class, 'getFrontView'] // syntax works
)->name('admin/about');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/media/{sublevels?}',
    [\TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin\MediaController::class, 'getFrontView']
)->name('admin/media');

//Route::middleware(['auth:sanctum', 'verified'])->get(
//    '/admin/dashboard',
//    function () {
//        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
//        return view('tassy::admin/dashboard/index');
//    }
//)->name('admin/dashboard');

//Route::middleware(['auth:sanctum', 'verified'])->get(
//    '/admin/help',
//    function () {
//        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
//        return view('tassy::admin/help/index');
//    }
//)->name('admin/help');


Route::middleware(['auth:sanctum', 'verified'])->get(
    '/admin/config/{sublevels?}',
    [\TallAndSassy\AppThemeBaseAdmin\Http\Controllers\Admin\ConfigController::class, 'getFrontView']
)->name('admin/config');

//Route::middleware(['auth:sanctum', 'verified'])->get(
//    '/admin/dev',
//    function () {
//        #\TallAndSassy\PageGuide\Http\Controllers\Admin\MenuController::boot();
//        return view('tassy::admin/dev/index');
//    }
//)->name('admin/dev');
