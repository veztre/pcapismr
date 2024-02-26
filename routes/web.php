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
use Illuminate\Support\Facades\DB;

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


Route::get('/dashboard', function () {
    if (Auth::user()->usertype== 'admin'){
        return redirect('/admin/dashboard');
    }else{
        return redirect('/trainee/dashboard');
    }
})->middleware(['auth'])->name('dashboard');



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

//admin store
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/download-file/{id}', [AdminController::class, 'downloadFile'])->name('admin.download-file');



//Trainee controller
Route::get('/trainee/dashboard', [TraineeController::class, 'index'])->name('traineedb');

// updated


//end

/* Module One Controller */
Route::get('/module', [ModuleOneController::class, 'index'])->name('module.moduleOne');
Route::get('/create', [ModuleOneController::class, 'create'])->name('create');
Route::post('/saveData', [ModuleOneController::class, 'save'])->name('saveData');
Route::get('/view/moduleOneUpdate/{id}', [ModuleOneController::class, 'edit'])->name('view');
Route::put('/view/moduleOneUpdate/{id}', [ModuleOneController::class, 'update'])->name('moduleOne.update');
Route::get('/pdf', [ModuleOneController::class, 'pdf']);


/* Module Two Controller */
Route::get('/moduleTwo', [ModuleTwoController::class, 'index'])->name('moduleTwo');
Route::get('/saveData2', [ModuleTwoController::class, 'save']);
Route::get('/view/moduleTwoUpdate/{id}', [ModuleTwoController::class, 'edit'])->name('view2');
Route::put('/view/moduleTwoUpdate/{id}', [ModuleTwoController::class, 'update'])->name('moduleTwo.update');
Route::get('/pdf2', [ModuleTwoController::class, 'pdf']);
Route::get('/reference2', [ModuleTwoController::class, 'generate']);

/* Module Three Controller */
Route::get('/moduleThree', [ModuleThreeController::class, 'index'])->name('module.moduleThree');
Route::get('/saveData3', [ModuleThreeController::class, 'save']);
Route::get('/view/moduleThreeUpdate/{id}', [ModuleThreeController::class, 'edit'])->name('view3');
Route::put('/view/moduleThreeUpdate/{id}', [ModuleThreeController::class, 'update'])->name('moduleThree.update');
Route::get('/pdf3', [ModuleThreeController::class, 'pdf']);
Route::get('/reference3', [ModuleThreeController::class, 'generate']);



/* Module Four Controller */
Route::get('/moduleFour', [ModuleFourController::class, 'index'])->name('module.moduleFour');
Route::get('/saveData4', [ModuleFourController::class, 'save']);
Route::get('/view/moduleFourUpdate/{id}', [ModuleFourController::class, 'edit'])->name('view4');
Route::put('/view/moduleFourUpdate/{id}', [ModuleFourController::class, 'update'])->name('moduleFour.update');
Route::get('/pdf4', [ModuleFourController::class, 'pdf']);
Route::get('/reference4', [ModuleFourController::class, 'generate']);


/* Module Five Controller */
Route::get('/moduleFive', [ModuleFiveController::class, 'index'])->name('module.moduleFive');

Route::get('/saveData5', [ModuleFiveController::class, 'save']);
Route::get('/view/moduleFiveUpdate/{id}', [ModuleFiveController::class, 'edit'])->name('view5');
Route::put('/view/moduleFiveUpdate/{id}', [ModuleFiveController::class, 'update'])->name('moduleFive.update');
Route::get('/pdf5', [ModuleFiveController::class, 'pdf']);
Route::get('/reference5', [ModuleFiveController::class, 'generate']);

/* Module Six Controller */
Route::get('/moduleSix', [ModuleSixController::class, 'index'])->name('module.moduleSix');


Route::post('/saveData6', [ModuleSixController::class, 'save']);
Route::get('/view/moduleSixUpdate/{id}', [ModuleSixController::class, 'edit'])->name('view6');
Route::put('/view/moduleSixUpdate/{id}', [ModuleSixController::class, 'update'])->name('moduleSix.update');
Route::get('/pdf6', [ModuleSixController::class, 'pdf']);

Route::get('/reference6', [ModuleSixController::class, 'generate']);


/*Add facility*/
Route::get('/addfacility', [AddFacilityController::class, 'index'])->name('addfacility');
Route::post('/addf', [AddFacilityController::class, 'store'])->name('addf');


Route::get('/tabs', [TabsController::class, 'index'])->name('tabs.index');

Route::resource('moduleOne', ModuleOneController::class);
Route::resource('moduleTwo', ModuleTwoController::class);
Route::resource('moduleThree', ModuleThreeController::class);
Route::resource('moduleFour', ModuleFourController::class);
Route::resource('moduleFive', ModuleFiveController::class);
Route::resource('moduleSix', ModuleSixController::class);


/*dashboard update usertype*/
Route::post('/admin/updateUsertype', [AdminController::class, 'updateUsertype'])->name('updateUsertype');

/*delete trainee account*/
Route::match(['get', 'post'], '/delete-trainee-accounts', [AdminController::class, 'deleteTraineeAccounts'])->name('delete-trainee-accounts');


