<?php



use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleOneController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ModuleTwoController;
use App\Http\Controllers\ModuleThreeController;
use App\Http\Controllers\ModuleFourController;
use App\Http\Controllers\ModuleFiveController;
use App\Http\Controllers\ModuleSixController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
});

Route::redirect('/', destination: 'login');

Route::get('/moduleOne', [ModuleOneController::class, 'index'])->name('module.moduleOne');

Route::post('/saveData', [ModuleOneController::class, 'save'])->name('saveData');

Route::get('/pdf', [ModuleOneController::class, 'pdf']);

Route::get('/reference', [ModuleOneController::class, 'generate'])->name('module.moduleOne.generate.save');

/* Module Two Controller */
Route::get('/moduleTwo', [ModuleTwoController::class, 'index'])->name('module.moduleTwo');

Route::get('/saveData2', [ModuleTwoController::class, 'save'])->name('module.moduleTwo');

Route::get('/pdf2', [ModuleTwoController::class, 'pdf']);

/* Module Three Controller */
Route::get('/moduleThree', [ModuleThreeController::class, 'index'])->name('module.moduleThree');

Route::get('/saveData3', [ModuleThreeController::class, 'save'])->name('module.moduleThree');

Route::get('/pdf3', [ModuleThreeController::class, 'pdf']);

/* Module Four Controller */
Route::get('/moduleFour', [ModuleFourController::class, 'index'])->name('module.moduleFour');

Route::get('/saveData4', [ModuleFourController::class, 'save'])->name('module.moduleFour');

Route::get('/pdf4', [ModuleFourController::class, 'pdf']);


/* Module Five Controller */
Route::get('/moduleFive', [ModuleFiveController::class, 'index'])->name('module.moduleFive');

Route::get('/saveData5', [ModuleFiveController::class, 'save']);

Route::get('/pdf5', [ModuleFiveController::class, 'pdf']);

/* Module Six Controller */
Route::get('/moduleSix', [ModuleSixController::class, 'index'])->name('module.moduleSix');

Route::get('/saveData6', [ModuleSixController::class, 'save']);

Route::get('/pdf6', [ModuleSixController::class, 'pdf']);
