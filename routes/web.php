<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SKPDController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserUlpController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\SkpdListController;
use App\Http\Controllers\UserSkpdController;


Route::middleware(['guest:userskpd'])->group(function () {
    Route::get('/loginulp', function () {
        return view('auth.loginskpd');
    })->name('login');
// Route::middleware(['guest:userulp'])->group(function () {
//     Route::get('/loginulp', function () {
//         return view('auth.loginskpd');
//     })->name('login');
    

    Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
});

// Shared dashboard for both SKPD and ULP users
// Route::middleware(['auth:userskpd'])->group(function() {
Route::middleware(['auth:userulp'])->group(function() {
    Route::get('/proseslogout', [AuthController::class, 'proseslogout']);
    Route::get('/ulp/dashboard', [SKPDController::class, 'dashboardskpd']);
    
// });

// //Tampilan Halaman Depan
// Route::get('/', [BlogController::class, 'berita'])->name('/');

// // Login User SKPD
// Route::middleware(['guest:userskpd','guest:userulp'])->group(function () {
//     Route::get('/loginskpd', function () {
//         return view('auth.loginskpd');
//         })->name('login');
    
//     Route::post('/proseslogin', [AuthController::class, 'proseslogin']);




// });


//============================================SKPD=================================
// ROUTE SKPD
// Route::middleware(['auth:userskpd','auth:userulp'])->group(function() {
//     Route::get('/proseslogout', [AuthController::class, 'proseslogout']);
//     Route::get('/skpd/dashboard', [SKPDController::class, 'dashboardskpd']);

    // Profil User
    Route::get('/profilskpd', [SKPDController::class, 'profilskpd']);
    Route::post('/profilskpd/edit', [SKPDController::class, 'profilskpdedit']);
    Route::post('/profilskpd/{user_id}/update', [SKPDController::class, 'profilskpdupdate']);

    // Profil Dinas
     Route::get('/profildinas', [SKPDController::class, 'profildinasskpd'])->name('profildinasskpd');
    Route::post('/profildinasskpd/edit', [SKPDController::class, 'profildinasskpdedit']);
    // Route::get('/profildinas', [SKPDController::class, 'profildinasskpd']);
    // Route::post('/profildinasskpd/edit', [SKPDController::class, 'profildinasskpdedit']);
    Route::post('/profildinasskpd/{skpd_id}/update', [SKPDController::class, 'profildinasskpdupdate']);

    

   


    // SUMBER DANA SKPD
    Route::get('/sumberdana', [SKPDController::class, 'sumberdana']);
    Route::post('/sumberdana/store', [SKPDController::class, 'sumberdanastore']);
    Route::post('/sumberdanaskpd/edit', [SKPDController::class, 'sumberdanaskpdedit']);
    Route::post('/sumberdana/{dana_id}/update', [SKPDController::class, 'sumberdanaupdate']);
    Route::post('/sumberdanaskpd/{dana_id}/delete', [SKPDController::class, 'sumberdanadeleteskpd']);

    // PERMOHONAN LELANG SKPD
    // Route::get('/permohonanlelang/skpd', [SKPDController::class, 'permohonanlelangskpd']);
    Route::get('/getjeniskontrak', [SKPDController::class, 'getJeniskontrak']);
    // Route::post('/permohonanlelang/buat', [SKPDController::class, 'buatpermohonanlelang']);
    // Route::post('/permohonanlelang/edit', [SKPDController::class, 'permohonanedit']);
    //  Route::get('/permohonanlelang/edit', [SKPDController::class, 'permohonanedit'])->name('permohonan.edit');
    // Route::post('/permohonanlelang/{data_id}/update', [SKPDController::class, 'permohonanupdate']);
    // Route::post('/permohonanlelang/{data_id}/delete', [SKPDController::class, 'permohonandelete']);

    // Route::get('/permohonanlelang/{id}/edit', [SKPDController::class, 'editpermohonanlelang'])->name('editpermohonanlelang');
    // Route::put('/permohonanlelang/{id}', [SKPDController::class, 'updatepermohonanlelang'])->name('updatepermohonanlelang');

   
Route::get('/permohonanlelang/skpd', [SKPDController::class, 'permohonanlelangskpd'])->name('permohonanlelangskpd');
Route::get('/permohonanlelang/create', [SKPDController::class, 'buatpermohonanlelang'])->name('buatpermohonanlelang');
Route::post('/permohonanlelang/store', [SKPDController::class, 'storepermohonanlelang'])->name('storepermohonanlelang');
Route::get('/permohonanlelang/edit/{id}', [SKPDController::class, 'editpermohonanlelang'])->name('editpermohonanlelang');
// Route::post('/permohonanlelang/update/{id}', [SKPDController::class, 'updatepermohonanlelang'])->name('updatepermohonanlelang');
Route::delete('/permohonanlelang/delete/{id}', [SKPDController::class, 'permohonandelete'])->name('permohonandelete');

Route::get('/permohonanlelang/{id}', [SKPDController::class, 'show'])->name('permohonanlelang.show');
Route::get('/mailbox/{id}', [SKPDController::class, 'mailbox']);
Route::post('/permohonanlelang/edit', [SKPDController::class, 'permohonanedit']);
Route::post('/permohonanlelang/{data_id}/update', [SKPDController::class, 'permohonanupdate'])->name('permohonanlelang.update');

// hafis 7/26/24


Route::post('/permohonanlelang/buat', [SKPDController::class, 'store']);
Route::post('/permohonanlelang/edit', [SKPDController::class, 'permohonanedit']);
Route::post('/permohonanlelang/{id}/update', [SKPDController::class, 'permohonanupdate'])->name('permohonanlelang.update');
Route::post('/permohonanlelang/edit', [SKPDController::class, 'permohonanedit']);
Route::put('/permohonanlelang/{data_id}/update', [SKPDController::class, 'permohonanupdate'])->name('permohonanlelang.update');


//coba tambah
Route::get('/permohonan-disposisi', [SKPDController::class, 'permohonanDisposisi'])->name('permohonan.disposisi');

Route::patch('/disposisi/{id}', [SKPDController::class, 'updateDisposisi'])->name('disposisi.update');
// tambah untuk detail
Route::get('/disposisi/{id}/detail', [SKPDController::class, 'showDisposisiDetail'])->name('disposisi.detail');



// coba evaluasi
route::get('/permohonanlelangevaluasi', [SKPDController::class, 'permohonanlelangevaluasi'])->name('permohonanlelangevaluasi');










// coba tambah ulp


Route::get('skpd/user_ulp', [UserUlpController::class, 'create'])->name('create');
Route::post('skpd/user_ulp', [UserUlpController::class, 'store'])->name('store');
Route::get('skpd/user_ulp/{id}', [UserUlpController::class, 'show'])->name('show');
Route::get('skpd/user_ulp/{id}/edit', [UserUlpController::class, 'edit'])->name('edit');
Route::put('skpd/user_ulp/{id}', [UserUlpController::class, 'update'])->name('update');
Route::delete('skpd/user_ulp/{id}', [UserUlpController::class, 'destroy'])->name('destroy');


    // tambah skpdlist
// Route::get('skpd/skpdlist', [SKPDController::class, 'skpdlist'])->name('skpd.skpdlist');
// Route::get('skpd/buatskpdlist', [SKPDController::class, 'buatskpdlist'])->name('skpd.buatskpdlist');
// Route::post('skpd/storeskpdlist', [SKPDController::class, 'storeskpdlist'])->name('skpd.storeskpdlist');
// Route::get('skpd/{skpd_list}', [SKPDController::class, 'showskpdlist'])->name('skpd.showskpdlist');
// Route::get('skpd/{skpd_list}/edit', [SKPDController::class, 'editskpdlist'])->name('skpd.editskpdlist');
// Route::put('skpd/{skpd_list}', [SKPDController::class, 'updateskpdlist'])->name('skpd.updateskpdlist');
// Route::delete('skpd/{skpd_list}', [SKPDController::class, 'destroyskpdlist'])->name('skpd.destroyskpdlist');




Route::get('skpd/skpdlist', [SKPDController::class, 'skpdlist'])->name('skpd.skpdlist');
Route::get('skpd/buatskpdlist', [SKPDController::class, 'buatskpdlist'])->name('skpd.buatskpdlist');
Route::post('skpd/storeskpdlist', [SKPDController::class, 'storeskpdlist'])->name('skpd.storeskpdlist');
Route::get('skpd/{skpd_list}', [SKPDController::class, 'showskpdlist'])->name('skpd.showskpdlist');
Route::get('skpd/{skpd_list}/edit', [SKPDController::class, 'editskpdlist'])->name('skpd.editskpdlist');
Route::put('skpd/{skpd_list}', [SKPDController::class, 'updateskpdlist'])->name('skpd.updateskpdlist');
Route::delete('skpd/{skpd_list}', [SKPDController::class, 'destroyskpdlist'])->name('skpd.destroyskpdlist');

Route::prefix('skpd')->group(function () {
    // Route untuk SKPD List
    Route::get('skpdlist', [SKPDController::class, 'skpdlist'])->name('skpd.skpdlist');

    // Route untuk manage user sesuai SKPD ID
    Route::resource('skpdlist/{skpd_id}/users', UserSkpdController::class, [
        'as' => 'skpd'
    ]);
});

// syarat dokumen
// Route::get('skpd/syaratdokumen', [SKPDController::class, 'syaratdokumen'])->name('skpd.syaratdokumen');
// Route::get('skpd/buatsyarat', [SKPDController::class, 'buatsyarat'])->name('skpd.buatsyarat');
// Route::post('skpd/storesyarat', [SKPDController::class, 'storesyarat'])->name('skpd.storesyarat');
// Route::get('skpd/showsyarat/{id}', [SKPDController::class, 'showsyarat'])->name('skpd.showsyarat');
// Route::get('skpd/editsyarat/{id}', [SKPDController::class, 'editsyarat'])->name('skpd.editsyarat');
// Route::put('skpd/updatesyarat/{id}', [SKPDController::class, 'updatesyarat'])->name('skpd.updatesyarat');
// Route::delete('skpd/destroysyarat/{id}', [SKPDController::class, 'destroysyarat'])->name('skpd.destroysyarat');

// Route::get('skpd/syaratdokumen', [SKPDController::class, 'syaratdokumen'])->name('skpd.syaratdokumen');
// Route::get('skpd/createsyarat', [SKPDController::class, 'createsyarat'])->name('skpd.createsyarat');
// Route::post('skpd/storesyarat', [SKPDController::class, 'storesyarat'])->name('skpd.storesyarat');
// Route::get('skpd/showsyarat/{id}', [SKPDController::class, 'showsyarat'])->name('skpd.showsyarat');
// Route::get('skpd/editsyarat/{id}', [SKPDController::class, 'editsyarat'])->name('skpd.editsyarat');
// Route::put('skpd/updatesyarat/{id}', [SKPDController::class, 'updatesyarat'])->name('skpd.updatesyarat');
// Route::delete('skpd/destroysyarat/{id}', [SKPDController::class, 'destroysyarat'])->name('skpd.destroysyarat');

// Route::resource('syarat_dokumen', SKPDController::class);
// Route::get('/syaratdokumen', [SKPDController::class, 'syaratdokumen'])->name('skpd.syaratdokumen');
// Route::get('/syaratdokumen/createsyarat', [SKPDController::class, 'createsyarat'])->name('skpd.createsyarat');
// Route::post('/syaratdokumen/storesyarat', [SKPDController::class, 'storesyarat'])->name('skpd.storesyarat');
// Route::get('/syaratdokumen/showsyarat/{syaratdokumen}', [SKPDController::class, 'showsyarat'])->name('skpd.showsyarat');
// Route::get('/syaratdokumen/editsyarat/{syaratdokumen}', [SKPDController::class, 'editsyarat'])->name('skpd.editsyarat');
// Route::put('/syaratdokumen/updatesyarat/{syaratdokumen}', [SKPDController::class, 'updatesyarat'])->name('skpd.updatesyarat');
// Route::delete('/syaratdokumen/destroysyarat/{syaratdokumen}', [SKPDController::class, 'destroysyarat'])->name('skpd.destroysyarat');


// Route::get('/syaratdokumen', [SKPDController::class, 'syaratdokumen']);
// Route::get('syaratdokumen/createsyarat', [SKPDController::class, 'createsyarat']);
// Route::post('syaratdokumen/storesyarat', [SKPDController::class, 'storesyarat']);
// Route::get('syaratdokumen/showsyarat/{syaratdokumen}', [SKPDController::class, 'showsyarat']);
// Route::get('syaratdokumen/editsyarat/{syaratdokumen}', [SKPDController::class, 'editsyarat']);
// Route::put('syaratdokumen/updatesyarat/{syaratdokumen}', [SKPDController::class, 'updatesyarat']);
// Route::delete('syaratdokumen/destroysyarat/{syaratdokumen}', [SKPDController::class, 'destroysyarat']);


Route::get('/syaratdokumen', [SKPDController::class, 'syaratdokumen'])->name('skpd.syaratdokumen');
Route::get('/syaratdokumen/createsyarat', [SKPDController::class, 'createsyarat'])->name('skpd.createsyarat');
Route::post('/syaratdokumen/storesyarat', [SKPDController::class, 'storesyarat'])->name('skpd.storesyarat');
Route::get('/syaratdokumen/showsyarat/{syaratdokumen}', [SKPDController::class, 'showsyarat'])->name('skpd.showsyarat');
Route::get('/syaratdokumen/editsyarat/{syaratdokumen}', [SKPDController::class, 'editsyarat'])->name('skpd.editsyarat');
Route::put('/syaratdokumen/updatesyarat/{syaratdokumen}', [SKPDController::class, 'updatesyarat'])->name('skpd.updatesyarat');
Route::delete('/syaratdokumen/destroysyarat/{syaratdokumen}', [SKPDController::class, 'destroysyarat'])->name('skpd.destroysyarat');

// pokja
// Route::get('/pokja', [SKPDController::class, 'pokja'])->name('skpd.pokja');
// Route::get('/pokja/createpokja', [SKPDController::class, 'createpokja'])->name('skpd.createpokja');
// Route::post('/pokja/storepokja', [SKPDController::class, 'storepokja'])->name('skpd.storepokja');
// Route::get('/pokja/showpokja/{pokja}', [SKPDController::class, 'showpokja'])->name('skpd.showpokja');

// // Route::get('/pokja/editpokja/{pokja}', [SKPDController::class, 'editpokja'])->name('skpd.editpokja');
// // Route::put('/skpd/pokja/{pokja}', [SKPDController::class, 'updatepokja'])->name('skpd.updatepokja');
// Route::get('/pokja/{pokja}/edit', [SKPDController::class, 'editpokja'])->name('skpd.editpokja');
// Route::put('/pokja/{pokja}', [SKPDController::class, 'updatepokja'])->name('skpd.updatepokja');
// Route::delete('/pokja/destroypokja/{pokja}', [SKPDController::class, 'destroypokja'])->name('skpd.destroypokja');


// Route::get('/anggota/create', [SKPDController::class, 'createAnggota'])->name('skpd.createAnggota');
// Route::post('/anggota/store', [SKPDController::class, 'storeAnggota'])->name('skpd.storeAnggota');

// coba
// Route::get('/pokja', [SKPDController::class, 'pokja'])->name('skpd.pokja');
// Route::get('/pokja/createpokja', [SKPDController::class, 'createpokja'])->name('skpd.createpokja');
// Route::post('/pokja/storepokja', [SKPDController::class, 'storepokja'])->name('skpd.storepokja');
// Route::get('/pokja/showpokja/{pokja}', [SKPDController::class, 'showpokja'])->name('skpd.showpokja');
// Route::get('/pokja/{pokja}/edit', [SKPDController::class, 'editpokja'])->name('skpd.editpokja');
// Route::put('/pokja/{pokja}', [SKPDController::class, 'updatepokja'])->name('skpd.updatepokja');
// Route::delete('/pokja/{pokja}', [SKPDController::class, 'destroypokja'])->name('skpd.destroypokja');
// Route::get('/pokja/{pokja}/createAnggota', [SKPDController::class, 'createAnggota'])->name('skpd.createAnggota');
// Route::post('/pokja/{pokja}/storeAnggota', [SKPDController::class, 'storeAnggota'])->name('skpd.storeAnggota');

Route::get('/pokja', [SKPDController::class, 'pokja'])->name('skpd.pokja');
Route::get('/pokja/create', [SKPDController::class, 'createPokja'])->name('skpd.createPokja');
Route::post('/pokja/store', [SKPDController::class, 'storePokja'])->name('skpd.storePokja');
Route::get('/pokja/{pokja}', [SKPDController::class, 'showPokja'])->name('skpd.showPokja');
Route::get('/pokja/{pokja}/edit', [SKPDController::class, 'editPokja'])->name('skpd.editPokja');
Route::put('/pokja/{pokja}', [SKPDController::class, 'updatePokja'])->name('skpd.updatePokja');
Route::delete('/pokja/{pokja}', [SKPDController::class, 'destroyPokja'])->name('skpd.destroyPokja');


// coba
// route::get('/pokja/{pokja}/anggota', [SKPDController::class, 'showAnggota'])->name('skpd.showAnggota');
// Route::get('/pokja/{pokja}/anggota', [SKPDController::class, 'getAnggotaByPokja'])->name('skpd.showAnggota');

// Route untuk menampilkan view anggota
Route::get('/pokja/{pokja}/view-anggota', [SKPDController::class, 'showAnggota'])->name('skpd.showAnggota');
// Route untuk mengambil anggota dalam format JSON (API)
Route::get('/pokja/{pokja}/anggota', [SKPDController::class, 'getAnggotaByPokja'])->name('skpd.getAnggota');





Route::get('/pokja/{pokja}/anggota/create', [SKPDController::class, 'createAnggota'])->name('skpd.createAnggota');
Route::post('/pokja/{pokja}/anggota/store', [SKPDController::class, 'storeAnggota'])->name('skpd.storeAnggota');
// Route::get('/anggota/{anggota}/edit', [SKPDController::class, 'editAnggota'])->name('skpd.editAnggota');
// Route::put('/anggota/{anggota}', [SKPDController::class, 'updateAnggota'])->name('skpd.updateAnggota');



// coba anggota
// Route::get('/anggota/{anggota}/edit', [SKPDController::class, 'editAnggota'])->name('skpd.editAnggota');
// Route::put('/anggota/{anggota}', [SKPDController::class, 'updateAnggota'])->name('skpd.updateAnggota');
// Route::delete('/anggota/{anggota}', [SKPDController::class, 'destroyAnggota'])->name('skpd.destroyAnggota');

Route::get('/anggota/{anggota}/edit', [SKPDController::class, 'editAnggota'])->name('skpd.editAnggota');

// Route to update an Anggota
Route::put('/anggota/{anggota}', [SKPDController::class, 'updateAnggota'])->name('skpd.updateAnggota');

// Route to delete an Anggota
Route::delete('/skpd/anggota/{id_anggota}', [SKPDController::class, 'destroyAnggota'])->name('skpd.destroyAnggota');

Route::get('/pokja/{pokjaId}/anggota', [SKPDController::class, 'getAnggotaByPokja']);


});



Route::get('/', function () {
    return view('welcome');
})->name('home');

 Route::prefix('users/{skpd_id}')->name('users.')->group(function () {
        Route::get('/', [UserSkpdController::class, 'index'])->name('index');
        Route::get('create', [UserSkpdController::class, 'create'])->name('create');
        Route::post('store', [UserSkpdController::class, 'store'])->name('store');
        Route::get('show/{user_id}', [UserSkpdController::class, 'show'])->name('show');
        Route::get('edit/{user_id}', [UserSkpdController::class, 'edit'])->name('edit');
        Route::put('update/{user_id}', [UserSkpdController::class, 'update'])->name('update');
        Route::delete('destroy/{user_id}', [UserSkpdController::class, 'destroy'])->name('destroy');
    });


    Route::get('/evaluasi', [EvaluasiController::class, 'index'])->name('evaluasi.index');
    Route::post('/evaluasi', [EvaluasiController::class, 'store'])->name('evaluasi.store');
    Route::post('/evaluasi/{id}/mark-as-addressed', [EvaluasiController::class, 'markAsAddressed'])->name('evaluasi.markAsAddressed');
    route::get('/evaluasi/create', [EvaluasiController::class, 'createEvaluation'])->name('evaluasi.create');

   Route::prefix('api')->group(function () {
    Route::get('/skpd-list/{id}', [SkpdListController::class, 'show']);
});
    // Route::get('/skpd-list/{id}', [SkpdListController::class, 'show']);
Route::get('/skpd-list/{id}', [SkpdListController::class, 'show']);


// Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
// Route::post('/messages/send', [MessageController::class, 'sendMessage'])->name('messages.send');
// Route::get('/messages', [MessageController::class, 'showMessages'])->name('messages.index');
// Route::get('/messages/create/{to_user_id?}', [MessageController::class, 'create'])->name('messages.create');
// Route::get('/messages/create/{to_user_id}', [MessageController::class, 'createWithUser'])->name('messages.createWithUser');



Route::get('/messages/create/{to_user_id}', [MessageController::class, 'create'])->name('messages.create');
Route::post('/messages/send', [MessageController::class, 'store'])->name('messages.send');
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');

route::get('/messages/edit/{id}', [MessageController::class, 'edit'])->name('messages.edit');
Route::put('/messages/update/{id}', [MessageController::class, 'update'])->name('messages.update');
// route::delete('/messages/destroy/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
Route::get('/messages/edit/{id}', [MessageController::class, 'edit'])->name('messages.edit');Route::delete('/messages/destroy/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
// route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');





  
    
