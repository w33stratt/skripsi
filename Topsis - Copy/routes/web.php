<?php
use Illuminate\Support\Facades\Http;

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


Route::get('/tes','analisaTopsis@get_positif_distance'); 
Route::get('/tes2',function(){
    $users = DB::table('kriteria')->select(DB::raw('SUM(wawancara) as jumlah'))->first();
    return $users->jumlah;
});
Route::group(['as' =>'admin.','middleware'=> 'auth'],function(){
    Route::get('/', function () {

  
        $data['kriteria'] = count(\App\Model\Kriteria::all());
        $data['s1'] = count(\App\Model\Kriteria::where('pendidikan','S1')->get());
        $data['d3'] = count(\App\Model\Kriteria::where('pendidikan','D3')->get());
        $data['smk'] = count(\App\Model\Kriteria::where('pendidikan','SMK')->get());

        $data['kriteria2'] = count(\App\Model\Kriteria2::all());
        $data['s1s'] = count(\App\Model\Kriteria2::where('pendidikan','S1')->get());
        $data['d3s'] = count(\App\Model\Kriteria2::where('pendidikan','D3')->get());
        $data['smks'] = count(\App\Model\Kriteria2::where('pendidikan','SMK')->get());
        return view('admin.dashboard',$data);

    });

    Route::get('/akriteria', 'kriteriaController@index')->name('akriteria');
    Route::get('/akriteria2', 'kriteria2Controller@index' )->name('akriteria2');
    Route::get('/asetting', function () {
        $options = \App\Model\Setting::getAllKeyValue();
        return view('admin.setting',$options);
    });
    Route::get('/alinguistik', function () {
        return view('admin.topsis.linguistik');
    });
    Route::get('/alinguistik2', function () {
        return view('admin.topsis.linguistik2');
    });
    Route::get('/amatrix_keputusan', function () {
        return view('admin.topsis.matrix_keputusan');
    });
    Route::get('/amatrix_keputusan2', function () {
        return view('admin.topsis.matrix_keputusan2');
    });
    Route::get('/amatrix_keputusan_ternormalisasi', function () {
        return view('admin.topsis.matrix_keputusan_ternormalisasi');
    });
    Route::get('/amatrix_keputusan_ternormalisasi2', function () {
        return view('admin.topsis.matrix_keputusan_ternormalisasi2');
    });
    Route::get('/amatrix_keputusan_terbobot', function () {
        return view('admin.topsis.matrix_keputusan_terbobot');
    });
    Route::get('/amatrix_keputusan_terbobot2', function () {
        return view('admin.topsis.matrix_keputusan_terbobot2');
    });
    Route::get('/ajarak_solusi_positif', function () {
        return view('admin.topsis.jarak_solusi_positif');
    });
    Route::get('/ajarak_solusi_positif2', function () {
        return view('admin.topsis.jarak_solusi_positif2');
    });
    Route::get('/ajarak_solusi_negatif', function () {
        return view('admin.topsis.jarak_solusi_negatif');
    });
    Route::get('/ajarak_solusi_negatif2', function () {
        return view('admin.topsis.jarak_solusi_negatif2');
    });
    Route::get('/anilai_preferensi', function () {
        return view('admin.topsis.nilai_preferensi');
    });
    Route::get('/anilai_preferensi2', function () {
        return view('admin.topsis.nilai_preferensi2');
    });
    Route::get('/ahasil_rekomendasi', function () {
        return view('admin.topsis.hasil_rekomendasi');
    });
 
    
    Route::get('/amatrix_solusi_ideal','analisaTopsis@matrix_solusi_ideal')->name('matrix_solusi_ideal');
    Route::get('/amatrix_solusi_ideal_sistem','analisaTopsis2@matrix_solusi_ideal')->name('matrix_solusi_ideal_sistem');
    // Route::get('/amatrix_solusi_ideal','analisaTopsis2@matrix_solusi_ideal')->name('matrix_solusi_idea');

    Route::group(['prefix' => 'admin'], function(){
        Route::group(["as" => "kriteria.", "prefix" => "kriteria"], function () {
            Route::get('/', 'kriteriaController@index')->name('index');
            Route::get('/get-kriteria2', 'kriteria2Controller@getKriteria2')->name('getkriteria2');
            
         
            Route::get('/edit/{id}', 'kriteriaController@edit')->name('edit');
            Route::post('/edit/update', 'kriteriaController@update')->name('update');
            
            Route::post('/delete', 'kriteriaController@delete')->name('delete');
            Route::post('/delete2', 'kriteria2Controller@delete')->name('delete2');
        });

        Route::group(["as" => "kriteria2.", "prefix" => "kriteria2"], function () {
            Route::get('/', 'kriteria2Controller@index')->name('index');
         
            Route::get('/edit/{id}', 'kriteria2Controller@edit')->name('edit');
            Route::post('/edit/update', 'kriteria2Controller@update')->name('update');
            
            Route::post('/delete', 'kriteria2Controller@delete')->name('delete');
        });

   

     
        
        Route::group(["as" => "topsis.", "prefix" => "topsis"], function () {
            Route::get('/linguistik', 'analisaTopsis@linguistik')->name('linguistik');
            Route::get('/linguistik2', 'analisaTopsis2@linguistik')->name('linguistik2');
            Route::get('/matrix_keputusan', 'analisaTopsis@matrix_keputusan')->name('matrix_keputusan');
            Route::get('/matrix_keputusan2', 'analisaTopsis2@matrix_keputusan')->name('matrix_keputusan2');
            Route::get('/matrix_keputusan_ternormalisasi', 'analisaTopsis@matrix_keputusan_ternormalisasi')->name('matrix_keputusan_ternormalisasi');
            Route::get('/matrix_keputusan_ternormalisasi2', 'analisaTopsis2@matrix_keputusan_ternormalisasi')->name('matrix_keputusan_ternormalisasi2');
            Route::get('/matrix_keputusan_terbobot', 'analisaTopsis@matrix_keputusan_terbobot')->name('matrix_keputusan_terbobot');
            Route::get('/matrix_keputusan_terbobot2', 'analisaTopsis2@matrix_keputusan_terbobot')->name('matrix_keputusan_terbobot2');
            
            Route::get('/jarak_solusi_positif', 'analisaTopsis@jarak_solusi_positif')->name('jarak_solusi_positif');
            Route::get('/jarak_solusi_positif2', 'analisaTopsis2@jarak_solusi_positif')->name('jarak_solusi_positif2');
            Route::get('/jarak_solusi_negatif', 'analisaTopsis@jarak_solusi_negatif')->name('jarak_solusi_negatif');
            Route::get('/jarak_solusi_negatif2', 'analisaTopsis2@jarak_solusi_negatif')->name('jarak_solusi_negatif2');
            Route::get('/nilai_preferensi', 'analisaTopsis@nilai_preferensi')->name('nilai_preferensi');
            Route::get('/nilai_preferensi2', 'analisaTopsis2@nilai_preferensi')->name('nilai_preferensi2');

            
        });
        Route::group(["as" => "setting.", "prefix" => "setting"], function () {
            Route::post('/bobot', 'settingController@bobot')->name('bobot');            
        });
    });
});

Route::get('/masuk',function(){
    return view('admin.login');
}); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('getData', 'FrontendController@getData');
