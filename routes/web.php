<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\PageController;
use App\Http\Controllers\Site\TenantPageController;
use App\Models\Web;
use App\Models\State;



/*Route::get('/',             [PageController::class, 'home'])->name('site.home');
Route::get('/sobre-nos',    [PageController::class, 'about'])->name('site.about');
Route::get('/servicos',     [PageController::class, 'services'])->name('site.services');
Route::get('/produtos',     [PageController::class, 'products'])->name('site.products');
Route::get('/contato',      [PageController::class, 'contact'])->name('site.contact');

*/
Route::domain('{tenant}.'.env('DOMAIN'))->middleware('tenant')->group(function () {
    Route::get('/', function () {

        $states = State::all();
        return $states;
        // return view('welcome');
    });
});


Route::domain(env('DOMAIN'))->group(function () {
    Route::get('/', function () {
        dd('hello landlord');
    });
});


require __DIR__.'/auth.php';
