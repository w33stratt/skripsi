<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use \App\Model\Kriteria2;
use Yajra\Datatables\Datatables;

class analisaTopsis2 extends Controller
{
    //
    
    public function get_linguistik()
    {
        # code...
        $kriteria2 = \App\Model\Kriteria2::all();
        //Prestasi
        foreach ($kriteria2 as $key) {
        # code...
        if (($key->wawancara > 20) and ($key->wawancara <= 40)) {
            # code...
            $key->l_wawancara = 1;
        }elseif (($key->wawancara > 40) and ($key->wawancara <= 50)) {
            # code...
            $key->l_wawancara = 2;
        }elseif (($key->wawancara > 50) and ($key->wawancara <= 60)) {
            # code...
            $key->l_wawancara = 3;
        }elseif (($key->wawancara > 60) and ($key->wawancara <= 80)) {
            # code...
            $key->l_wawancara = 4;
        }elseif (($key->wawancara > 80) and ($key->wawancara <= 100)) {
            # code...
            $key->l_wawancara = 5;
        }
        
    }

    foreach ($kriteria2 as $key) {
        # code...
        if (($key->pengetahuan > 20) and ($key->pengetahuan <= 40)) {
            # code...
            $key->l_pengetahuan = 1;
        }elseif (($key->pengetahuan > 40) and ($key->pengetahuan <= 50)) {
            # code...
            $key->l_pengetahuan = 2;
        }elseif (($key->pengetahuan > 50) and ($key->pengetahuan <= 60)) {
            # code...
            $key->l_pengetahuan = 3;
        }elseif (($key->pengetahuan > 60) and ($key->pengetahuan <= 80)) {
            # code...
            $key->l_pengetahuan = 4;
        }elseif (($key->pengetahuan > 80) and ($key->pengetahuan <= 100)) {
            # code...
            $key->l_pengetahuan = 5;
        }
        
    }
    foreach ($kriteria2 as $key) {
        # code...
        if (($key->testing > 20) and ($key->testing <= 40)) {
            # code...
            $key->l_testing = 1;
        }elseif (($key->testing > 40) and ($key->testing <= 50)) {
            # code...
            $key->l_testing = 2;
        }elseif (($key->testing > 50) and ($key->testing <= 60)) {
            # code...
            $key->l_testing = 3;
        }elseif (($key->testing > 60) and ($key->testing <= 80)) {
            # code...
            $key->l_testing = 4;
        }elseif (($key->testing > 80) and ($key->testing <= 100)) {
            # code...
            $key->l_testing = 5;
        }
        
    }
    foreach ($kriteria2 as $key) {
        # code...
        if (($key->cv > 20) and ($key->cv <= 40)) {
            # code...
            $key->l_cv = 1;
        }elseif (($key->cv > 40) and ($key->cv <= 50)) {
            # code...
            $key->l_cv = 2;
        }elseif (($key->cv > 50) and ($key->cv <= 60)) {
            # code...
            $key->l_cv = 3;
        }elseif (($key->cv > 60) and ($key->cv <= 80)) {
            # code...
            $key->l_cv = 4;
        }elseif (($key->cv > 80) and ($key->cv <= 100)) {
            # code...
            $key->l_cv = 5;
        }
        
    }
        foreach ($kriteria2 as $key) {
            # code...
            if (($key->waktu_pengerjaan > 0) and ($key->waktu_pengerjaan <= 1)) {
                # code...
                $key->l_waktu_pengerjaan = 5;
            }elseif (($key->waktu_pengerjaan > 1) and ($key->waktu_pengerjaan <= 2)) {
                # code...
                $key->l_waktu_pengerjaan = 4;
            }elseif (($key->waktu_pengerjaan > 2) and ($key->waktu_pengerjaan <= 3)) {
                # code...
                $key->l_waktu_pengerjaan = 3;
            }elseif (($key->waktu_pengerjaan > 3) and ($key->waktu_pengerjaan <= 4)) {
                # code...
                $key->l_waktu_pengerjaan = 2;
            }elseif (($key->waktu_pengerjaan > 4) and ($key->waktu_pengerjaan <= 5)) {
                # code...
                $key->l_waktu_pengerjaan = 1;
            }
            
        }
        foreach ($kriteria2 as $key) {
            # code...
            if (($key->gaji > 1) and ($key->gaji <= 15000000)) {
                # code...
                $key->l_gaji = 5;
            }elseif (($key->gaji > 15000000) and ($key->gaji <= 20000000)) {
                # code...
                $key->l_gaji = 4;
            }elseif (($key->gaji > 20000000) and ($key->gaji <= 25000000)) {
                # code...
                $key->l_gaji = 3;
            }elseif (($key->gaji > 25000000) and ($key->gaji <= 30000000)) {
                # code...
                $key->l_gaji = 2;
            }elseif (($key->gaji > 30000000) and ($key->gaji <= 35000000)) {
                # code...
                $key->l_gaji = 1;
            }
        }

        return $kriteria2->all();
    }
    public function get_normalized()
    {
        # code...
        $kriteria2 = $this->get_linguistik();
        $temp_wawancara = 0;
        $temp_pengetahuan = 0;
        $temp_testing = 0;
        $temp_cv = 0;
        $temp_waktu_pengerjaan = 0; 
        $temp_gaji = 0; 
        foreach ($kriteria2 as $key) {
            # code...
            $temp_wawancara += $key->l_wawancara*$key->l_wawancara;
            $temp_pengetahuan += $key->l_pengetahuan*$key->l_pengetahuan;
            $temp_testing += $key->l_testing*$key->l_testing;
            $temp_cv += $key->l_cv*$key->l_cv;
            $temp_waktu_pengerjaan += $key->l_waktu_pengerjaan*$key->l_waktu_pengerjaan;
            $temp_gaji += $key->l_gaji*$key->l_gaji;
        }
        foreach ($kriteria2 as $key) {
            # code...
            $key->r_wawancara = $key->l_wawancara/(sqrt($temp_wawancara));
            $key->r_pengetahuan = $key->l_pengetahuan/(sqrt($temp_pengetahuan));
            $key->r_testing = $key->l_testing/(sqrt($temp_testing));
            $key->r_cv = $key->l_cv/(sqrt($temp_cv));
            $key->r_waktu_pengerjaan = $key->l_waktu_pengerjaan/(sqrt($temp_waktu_pengerjaan));
            $key->r_gaji = $key->l_gaji/(sqrt($temp_gaji));
        }


        return $kriteria2;        
    }

    public function get_terbobot()
    {
        # code...
        $kriteria2 = $this->get_normalized();
        $options = \App\Model\Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $c6 = json_decode($options['c6']);
        foreach ($kriteria2 as $key) {
            # code...
            $key->v_wawancara = $key->r_wawancara*$c1->weight;
            $key->v_pengetahuan = $key->r_pengetahuan*$c2->weight;
            $key->v_testing = $key->r_testing*$c3->weight;
            $key->v_cv = $key->r_cv*$c4->weight;
            $key->v_waktu_pengerjaan = $key->r_waktu_pengerjaan*$c5->weight;
            $key->v_gaji = $key->r_gaji*$c6->weight;
        }

        return $kriteria2;
    }
    public function get_ideal()
    {
        # code...
        $options = \App\Model\Setting::getAllKeyValue();
        $c1 = json_decode($options['c1']);
        $c2 = json_decode($options['c2']);
        $c3 = json_decode($options['c3']);
        $c4 = json_decode($options['c4']);
        $c5 = json_decode($options['c5']);
        $c6 = json_decode($options['c6']);
        $kriteria2 = $this->get_terbobot();
        $temp_wawancara = [];
        $temp_pengetahuan = [];
        $temp_testing = [];
        $temp_cv = [];
        $temp_waktu_pengerjaan = [];
        $temp_gaji = [];
        foreach ($kriteria2 as $key) {
            # code...
            $temp_wawancara[] = $key->v_wawancara;
            $temp_pengetahuan[] = $key->v_pengetahuan;
            $temp_testing[] = $key->v_testing;
            $temp_cv[] = $key->v_cv;
            $temp_waktu_pengerjaan[] = $key->v_waktu_pengerjaan;
            $temp_gaji[] = $key->v_gaji;
        }
        
        $solusi = array(
            'c1' => array('positif' => (!$c1->is_cost) ?  max($temp_wawancara) :  min($temp_wawancara),'negatif' => ($c1->is_cost) ?  max($temp_wawancara) :  min($temp_wawancara)),
            'c2' => array('positif' => (!$c2->is_cost) ?  max($temp_pengetahuan) :  min($temp_pengetahuan),'negatif' => ($c2->is_cost) ?  max($temp_pengetahuan) :  min($temp_pengetahuan)),
            'c3' => array('positif' => (!$c3->is_cost) ?  max($temp_testing) :  min($temp_testing),'negatif' => ($c3->is_cost) ?  max($temp_testing) :  min($temp_testing)),
            'c4' => array('positif' => (!$c4->is_cost) ?  max($temp_cv) :  min($temp_cv),'negatif' => ($c4->is_cost) ?  max($temp_cv) :  min($temp_cv)),
            'c5' => array('positif' => (!$c5->is_cost) ?  max($temp_waktu_pengerjaan) :  min($temp_waktu_pengerjaan),'negatif' => ($c5->is_cost) ?  max($temp_waktu_pengerjaan) :  min($temp_waktu_pengerjaan)),
            'c6' => array('positif' => (!$c6->is_cost) ?  max($temp_gaji) :  min($temp_gaji),'negatif' => ($c6->is_cost) ?  max($temp_gaji) :  min($temp_gaji)),
        );

        return $solusi;
    }
    public function get_positif_distance()
    {
        # code...
        $kriteria2 = $this->get_terbobot();
        $solusi_ideal = $this->get_ideal();
        foreach ($kriteria2 as $key) {
            # code...
            $key->a_wawancara = pow(($key->v_wawancara - $solusi_ideal['c1']['positif']),2);
            $key->a_pengetahuan = pow(($key->v_pengetahuan - $solusi_ideal['c2']['positif']),2);
            $key->a_testing = pow(($key->v_testing - $solusi_ideal['c3']['positif']),2);
            $key->a_cv = pow(($key->v_cv - $solusi_ideal['c4']['positif']),2);
            $key->a_waktu_pengerjaan = pow(($key->v_waktu_pengerjaan - $solusi_ideal['c5']['positif']),2);
            $key->a_gaji = pow(($key->v_gaji - $solusi_ideal['c6']['positif']),2);
            $key->a_total = sqrt($key->a_wawancara+$key->a_pengetahuan+$key->a_testing+$key->a_cv+$key->a_waktu_pengerjaan+$key->a_gaji);
        }
        return $kriteria2;
    }
    public function get_negatif_distance()
    {
        # code...
        $kriteria2 = $this->get_positif_distance();
        $solusi_ideal = $this->get_ideal();
        foreach ($kriteria2 as $key) {
            # code...
            $key->b_wawancara = pow(($key->v_wawancara - $solusi_ideal['c1']['negatif']),2);
            $key->b_pengetahuan = pow(($key->v_pengetahuan - $solusi_ideal['c2']['negatif']),2);
            $key->b_testing = pow(($key->v_testing - $solusi_ideal['c3']['negatif']),2);
            $key->b_cv = pow(($key->v_cv - $solusi_ideal['c4']['negatif']),2);
            $key->b_waktu_pengerjaan = pow(($key->v_waktu_pengerjaan - $solusi_ideal['c5']['negatif']),2);
            $key->b_gaji = pow(($key->v_gaji - $solusi_ideal['c6']['negatif']),2);
            $key->b_total = sqrt($key->b_wawancara+$key->b_pengetahuan+$key->b_testing+$key->b_cv+$key->b_waktu_pengerjaan+$key->b_gaji);
        }
        return $kriteria2;
    }
    public function get_nilai_preferensi()
    {
        # code...
        $kriteria2 = $this->get_negatif_distance();
        foreach ($kriteria2 as $key) {
            # code...
            $key->nilai_preferensi = $key->b_total/($key->a_total + $key->b_total);
        }
        return $kriteria2;
    }
    public function linguistik()
    {
        # code...
        $kriteria2 = $this->get_linguistik();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->editColumn('l_wawancara',function($kriteria2){
                    if ($kriteria2->l_wawancara == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($kriteria2->l_wawancara == 2) {
                        # code...
                        return "Rendah";
                    }elseif ($kriteria2->l_wawancara == 3) {
                        # code...
                        return "Cukup";
                    }elseif ($kriteria2->l_wawancara == 4) {
                        # code...
                        return "Baik";
                    }elseif ($kriteria2->l_wawancara == 5) {
                        # code...
                        return "Sangat Baik";
                    }
                })->editColumn('l_pengetahuan',function($kriteria2){
                    if ($kriteria2->l_pengetahuan == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($kriteria2->l_pengetahuan == 2) {
                        # code...
                        return "Rendah";
                    }elseif ($kriteria2->l_pengetahuan == 3) {
                        # code...
                        return "Cukup";
                    }elseif ($kriteria2->l_pengetahuan == 4) {
                        # code...
                        return "Baik";
                    }elseif ($kriteria2->l_pengetahuan == 5) {
                        # code...
                        return "Sangat Baik";
                    }
                })->editColumn('l_testing',function($kriteria2){
                    if ($kriteria2->l_testing == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($kriteria2->l_testing == 2) {
                        # code...
                        return "Rendah";
                    }elseif ($kriteria2->l_testing == 3) {
                        # code...
                        return "Cukup";
                    }elseif ($kriteria2->l_testing == 4) {
                        # code...
                        return "Baik";
                    }elseif ($kriteria2->l_testing == 5) {
                        # code...
                        return "Sangat Baik";
                    }
                })->editColumn('l_cv',function($kriteria2){
                    if ($kriteria2->l_cv == 1 ) {
                        # code...
                        return "sangat rendah";
                    }elseif ($kriteria2->l_cv == 2) {
                        # code...
                        return "Rendah";
                    }elseif ($kriteria2->l_cv == 3) {
                        # code...
                        return "Cukup";
                    }elseif ($kriteria2->l_cv == 4) {
                        # code...
                        return "Baik";
                    }elseif ($kriteria2->l_cv == 5) {
                        # code...
                        return "Sangat Baik";
                    }
                })->editColumn('l_waktu_pengerjaan',function($kriteria2){
                    if ($kriteria2->l_waktu_pengerjaan == 3 ) {
                        # code...
                        return "Cukup";
                    }elseif ($kriteria2->l_waktu_pengerjaan == 4) {
                        # code...
                        return "Cepat";
                    }elseif ($kriteria2->l_waktu_pengerjaan == 5) {
                        # code...
                        return "Sangat Cepat";
                    }elseif ($kriteria2->l_waktu_pengerjaan == 1) {
                        # code...
                        return "Sangat Lambat";
                    }elseif ($kriteria2->l_waktu_pengerjaan == 2) {
                        # code...
                        return "Lambat";
                    }
                })->editColumn('l_gaji',function($kriteria2){
                    if ($kriteria2->l_gaji == 3 ) {
                        # code...
                        return "Cukup";
                    }elseif ($kriteria2->l_gaji == 4) {
                        # code...
                        return "Rendah";
                    }elseif ($kriteria2->l_gaji == 2) {
                        # code...
                        return "Tinggi";
                    }elseif ($kriteria2->l_gaji == 1) {
                        # code...
                        return "Sangat Tinggi";
                    }elseif ($kriteria2->l_gaji == 5) {
                        # code...
                        return "Sangat Rendah";
                    }
                })
                ->make(true);
         
    }
    public function matrix_keputusan()
    {
        # code...
        $kriteria2 = $this->get_linguistik();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->make(true);
    }
    public function matrix_keputusan_ternormalisasi()
    {
        # code...
        $kriteria2 = $this->get_normalized();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->make(true);
    }
    public function matrix_keputusan_terbobot()
    {
        # code...
        $kriteria2 = $this->get_terbobot();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->make(true);
    }
    
    public function matrix_solusi_ideal()
    {
        # code...
        
        $datas['solusi'] = $this->get_ideal();
        return view('admin.topsis.matrix_solusi_ideal',$datas);
    }
    public function jarak_solusi_positif()
    {
        # code...
        $kriteria2 = $this->get_positif_distance();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->make(true);
    }
    public function jarak_solusi_negatif()
    {
        # code...
        $kriteria2 = $this->get_negatif_distance();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->make(true);
    }
    public function nilai_preferensi()
    {
        # code...
        $kriteria2 = $this->get_nilai_preferensi();
        return Datatables::of($kriteria2)
                ->setRowId(function(Kriteria2 $kriteria2){
                    return $kriteria2->id;
                })->make(true);
    }

}
