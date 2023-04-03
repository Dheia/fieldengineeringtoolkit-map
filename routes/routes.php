<?php
// 
// Route::get('/objects/{code}', function($code) {
//     $object = Objects::where('code', $code)->first();
//     return [
//         'object' => $object
//     ];
// });

Route::get('/object-items/:slug', function($slug) {
    return Redirect::to('/object-items/'.$slug);
});

Route::get('/object-items/{slug}', function($slug) {
    return Cms\Classes\Controller::run('OpenMindedIT\FieldEngineeringToolkit\Components\Objectlist', [
        'slug' => $slug,
    ]);
});
