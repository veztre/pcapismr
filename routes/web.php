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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TransitiontoMod2Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AddFacilityController;
use App\Http\Controllers\TabsController;

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
    if (Auth::user()->usertype== 'admin'){
        return redirect('/admin/dashboard');
    }else{
        return redirect('/trainee/dashboard');
    }
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
//transition
Route::get('/moduleTwoTransition', [TransitiontoMod2Controller::class, 'index']);
Route::post('/check', [TransitiontoMod2Controller::class, 'check'])->name('check');
//end of transition


Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/create/user', [AdminController::class, 'create'])->name('create');
Route::post('/save', [AdminController::class, 'store']);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('editaccount');
Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');
// end of updated route
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
// admin controller end
//Trainee controller
Route::get('/trainee/dashboard', [TraineeController::class, 'index']);

// updated


//end


Route::get('/moduleOne', [ModuleOneController::class, 'index'])->name('module.moduleOne');

Route::post('/saveData', [ModuleOneController::class, 'save'])->name('saveData');
Route::get('/view/moduleOne/{id}', [ModuleOneController::class, 'edit'])->name('view');
Route::get('/pdf', [ModuleOneController::class, 'pdf']);
Route::put('/view/updatemoduleOne/{id}', [ModuleOneController::class, 'update'])->name('update1');

Route::get('/reference', [ModuleOneController::class, 'generate'])->name('module.moduleOne.generate.save');

/* Module Two Controller */
Route::get('/moduleTwo', [ModuleTwoController::class, 'index'])->name('module.moduleTwo');

Route::get('/saveData2', [ModuleTwoController::class, 'save']);
Route::get('/view/moduleTwo/{id}', [ModuleTwoController::class, 'edit']);
Route::get('/pdf2', [ModuleTwoController::class, 'pdf']);
Route::get('/reference2', [ModuleTwoController::class, 'generate']);
Route::put('/view/updatemoduleTwo/{id}', [ModuleTwoController::class, 'update'])->name('update2');


/* Module Three Controller */
Route::get('/moduleThree', [ModuleThreeController::class, 'index'])->name('module.moduleThree');

Route::get('/saveData3', [ModuleThreeController::class, 'save'])->name('module.moduleThree');
Route::get('/view/moduleThree/{id}', [ModuleThreeController::class, 'edit']);
Route::put('/view/updatemoduleThree/{id}', [ModuleThreeController::class, 'update'])->name('update3');
Route::get('/pdf3', [ModuleThreeController::class, 'pdf']);
Route::get('/reference3', [ModuleThreeController::class, 'generate']);

/* Module Four Controller */
Route::get('/moduleFour', [ModuleFourController::class, 'index'])->name('module.moduleFour');

Route::get('/saveData4', [ModuleFourController::class, 'save']);
Route::get('/view/moduleFour/{id}', [ModuleFourController::class, 'edit']);
Route::put('/view/updatemoduleFour/{id}', [ModuleFourController::class, 'update'])->name('update4');
Route::get('/pdf4', [ModuleFourController::class, 'pdf']);
Route::get('/reference4', [ModuleFourController::class, 'generate']);


/* Module Five Controller */
Route::get('/moduleFive', [ModuleFiveController::class, 'index'])->name('module.moduleFive');

Route::get('/saveData5', [ModuleFiveController::class, 'save']);
Route::get('/view/moduleFive/{id}', [ModuleFiveController::class, 'edit']);
Route::put('/view/updatemoduleFive/{id}', [ModuleFiveController::class, 'update'])->name('update5');
Route::get('/pdf5', [ModuleFiveController::class, 'pdf']);
Route::get('/reference5', [ModuleFiveController::class, 'generate']);

/* Module Six Controller */
Route::get('/moduleSix', [ModuleSixController::class, 'index'])->name('module.moduleSix');

Route::post('/saveData6', [ModuleSixController::class, 'save']);
Route::get('/view/moduleSix/{id}', [ModuleSixController::class, 'edit']);
Route::put('/view/updatemoduleSix/{id}', [ModuleSixController::class, 'update'])->name('update6');
Route::get('/pdf6', [ModuleSixController::class, 'pdf']);

Route::get('/reference6', [ModuleSixController::class, 'generate']);


/*Add facility*/
Route::get('/addfacility', [AddFacilityController::class, 'index'])->name('addfacility');
Route::post('/addf', [AddFacilityController::class, 'store'])->name('addf');

