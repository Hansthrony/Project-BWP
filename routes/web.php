<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [MyController::class, 'home']);
// Route::get('/', [MyController::class, 'showBuku']);

// Route::get('/login', [MyController::class, 'login'])->name("login");

// Route::get('/register', [MyController::class, 'register'])->name("register");

// Route::get('/showrole', [MyController::class, 'showrole']);
// Route::post('/simpanrole', [MyController::class, 'simpanrole']);
// Route::post('doLogin', [MyController::class, 'doLogin'])->name("doLogin");

Route::controller(MyController::class)->group(function () {
    Route::get('/','home')->name('index');
    Route::get('/home','home')->name('home');
    Route::get('/description','getDescriptionPage')->name('description');
    Route::get('/login','login')->name('login');
    Route::get('/register','register')->name('register');
    Route::get('admin/adminhome','getAdminHomePage')->name('admin-home');
    Route::get('author/authorhome','getAuthorHomePage')->name('author-home');
    Route::get('logout','logout')->name('logout');
    Route::post('doLogin','doLogin')->name('do-login');
    Route::post('doRegister','doRegister')->name('do-register');
    Route::get('user/userhome','getUserHomePage')->name('user-home');
    Route::get('cust/custhome','getCustHomePage')->name('cust-home');
    Route::get('kirimLamaran/{id_user}','kirimLamaran')->name('kirim-lamaran');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('admin/adminhome','getAdminHomePage')->name('admin-home');
    Route::get('admin/adminuser','getAdminUserPage')->name('admin-user');
    Route::get('admin/adminbuku','getAdminBukuPage')->name('admin-buku');
    Route::get('admin/viewlamaran/{id_lamaran}','detailLamaran')->name('detail-lamaran');
    Route::post('acceptOrReject','acceptOrReject')->name('accept-or-reject');
    Route::post('toggleUser','toggleUser')->name('toggle-user');
    Route::get('admin/test','getAdminTestPage')->name('test');
    Route::get('admin/transaksi','getAdminTransaksiPage')->name('transaksi');
});

Route::controller(AuthorController::class)->group(function (){
    Route::get('author/authorhome','getAuthorHomePage')->name('author-home');
    Route::get('author/authorhome','getBookUser')->name('author-book');
    Route::get('author/authordetail/{id}','authordetail')->name('authorDetail');
    Route::get('dodelete/{id}','doDelete')->name('doDelete');
    Route::get('author/uploadbook', 'authorUploadBook')->name('authorUploadBook');
    Route::get('author/authorNonBook','authorNonBook')->name('authorNonBook');
    Route::post('doUpload','doUpload')->name('doUpload');
    Route::post('doUploadNonBook','doUploadNonBook')->name('doUploadNonBook');
});

Route::controller(UserController::class)->group(function () {
    Route::get('user/details','getUserDetail')->name('user-detail');
    Route::get('user/userhome','getUserHomePage')->name('user-home');
    Route::get('user/usersearch','getUserSearchPage')->name('user-search');
    Route::get('user/usersearch2','getUserSearchPage2')->name('user-search-2');
    Route::get('user/usercart','getUserCartPage')->name('user-cart');
    Route::post('searchBuku','searchBuku')->name('search-buku');
    Route::post('searchBuku2','searchBuku2')->name('search-buku-2');
    Route::get('user/isisaldo/{id_user}','getIsiSaldoPage')->name('isisaldo-page');
    Route::post('isiSaldo','isiSaldo')->name('isi-saldo');
    Route::get('user/edituser/{id_user}','getEditUserPage')->name('edituser-page');
    Route::post('editUser','editUser')->name('edit-user');
    Route::get('user/transaksimember/{id_user}','transaksiMemberPage')->name('transaksi-page');
    Route::post('beliMember','beliMember')->name('beli-member');
    Route::post('batalMember','batalMember')->name('batal-member');
    Route::get('user/detailbuku/{id_buku}','detailBuku')->name('detail-buku');
    Route::post('addToCartBook','addToCartBook')->name('add-cart-book');
    Route::get('user/checkout','getCheckoutPage')->name('user-checkout');
    Route::post('checkoutCart','checkoutCart')->name('checkout');
});

Route::controller(TestController::class)->group(function() {
    Route::post('lihatSemuaUser','lihatSemuaUser')->name('lihat-semua-user');
    Route::post('tesAddUser','tesAddUser')->name('tes-add-user');
});
