<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\BudgetIncomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeputyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanTransactionController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdministrationController;
use App\Models\Administration;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Other Routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/test', [TestController::class, 'test']);
Route::post('/test', [TestController::class, 'testPost'])->name('test.post');
Route::get('/test2', [TestController::class, 'test2']);
// /other routes

// Auth Routes
Auth::routes();
// /auth routes

// Users and Roles Routes
Route::get('users/profile', [UserController::class, 'profile'])->name('users.profile');
Route::get('users/trash', [UserController::class, 'trash'])->name('users.trash');
Route::delete('users/{user}/delete', [UserController::class, 'forceDelete'])->name('users.force-delete');
Route::get('users/{user}/restore', [UserController::class, 'restore'])->name('users.restore');
Route::resource('users', UserController::class);


Route::delete('roles/{role}/delete', [RoleController::class, 'forceDelete'])->name('roles.force-delete');
Route::get('roles/{role}/restore', [RoleController::class, 'restore'])->name('roles.restore');
Route::get('roles/trash', [RoleController::class, 'trash'])->name('roles.trash');
Route::resource('roles', RoleController::class);
// /users and roles routes

// Staff Routes
Route::get('staff/trash', [StaffController::class, 'trash'])->name('staff.trash');
Route::resource('staff', StaffController::class);
// /staff Routes

// Offices, Deputies and Administrations Routes
Route::get('offices/trash', [OfficeController::class, 'trash'])->name('offices.trash');
Route::resource('offices', OfficeController::class);

Route::delete('deputies/{deputy}/delete', [DeputyController::class, 'forceDelete'])->name('deputies.force-delete');
Route::get('deputies/{deputy}/restore', [DeputyController::class, 'restore'])->name('deputies.restore');
Route::resource('deputies', DeputyController::class);

Route::delete('administrations/{administration}/delete', [AdministrationController::class, 'forceDelete'])->name('administrations.force-delete');
Route::get('administrations/{administration}/restore', [AdministrationController::class, 'restore'])->name('administrations.restore');
Route::resource('administrations', AdministrationController::class);
// /offices, deputies and administrations routes


// Budgets and Incomes Routes
Route::get('budgets/{id}/summary', [BudgetController::class, 'summary'])->name('budgets.summary');
Route::get('budgets/trash', [BudgetController::class, 'trash'])->name('budgets.trash');
Route::resource('budgets', BudgetController::class);


Route::resource('incomes', BudgetIncomeController::class);
// /budgets and incomes routes

// Expenses Routes
Route::get('expenses/trash', [ExpenseController::class, 'trash'])->name('expenses.trash');
Route::resource('expenses', ExpenseController::class);
// /expenses routes

// Procurement Routes
Route::get('procurements/trash', [ProcurementController::class, 'trash'])->name('procurements.trash');
Route::resource('procurements', ProcurementController::class);
// /procurement routes


// Loans and Transactions Routes
Route::get('loans/trash', [LoanController::class, 'trash'])->name('loans.trash');
Route::resource('loans', LoanController::class);

Route::resource('transactions', LoanTransactionController::class);
// /loans and transactions routes