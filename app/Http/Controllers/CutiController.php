<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\Karyawan;
use Carbon\Carbon;

class CutiController extends Controller
{
    public function index(){
        $data_cuti = Cuti::all();
        $data_karyawan = Karyawan::all();
    
        $i = 0;
        $sisa_cuti_karyawan = [];

        while($i<count($data_karyawan)){
            $data_cuti_karyawan = Cuti::where('Nomor_Induk', $data_karyawan[$i]->Nomor_Induk)->get();
            $banyak_cuti = $data_cuti_karyawan->sum('Lama_Cuti');
            $sisa_cuti = 12 - $banyak_cuti;
            if($sisa_cuti<0){
                $sisa_cuti = 0;
            }
            $item = [
                'Nomor_Induk' => $data_karyawan[$i]->Nomor_Induk,
                'Nama' => $data_karyawan[$i]->Nama,
                'Sisa_Cuti'=> $sisa_cuti
            ];
            $sisa_cuti_karyawan[$i] = $item;
            $i++;
        }

        return view('halaman2',[
            'data_karyawan' => $data_karyawan,
            'data_cuti_karyawan' => $data_cuti,
            'sisa_cuti_karyawan' => $sisa_cuti_karyawan
        ]);
    }

    public function karyawan_with_cuti(){
        $karyawan_cuti = Cuti::all();
        return response()->json($karyawan_cuti);
    }

    public function karyawan_sisa_cuti(){
        $data_karyawan = Karyawan::all();
    
        $i = 0;
        $sisa_cuti_karyawan = [];

        while($i<count($data_karyawan)){
            $data_cuti_karyawan = Cuti::where('Nomor_Induk', $data_karyawan[$i]->Nomor_Induk)->get();
            $banyak_cuti = $data_cuti_karyawan->sum('Lama_Cuti');
            $sisa_cuti = 12 - $banyak_cuti;

            if($sisa_cuti<0){
                $sisa_cuti = 0;
            }

            $item = [
                'Nomor_Induk' => $data_karyawan[$i]->Nomor_Induk,
                'Nama' => $data_karyawan[$i]->Nama,
                'Sisa_Cuti'=> $sisa_cuti
            ];
            $sisa_cuti_karyawan[$i] = $item;
            $i++;
        }

        return response()->json($sisa_cuti_karyawan);
    }

    public function post_cuti(Request $request){
        $tanggal_cuti = Carbon::createFromFormat('d/m/Y', $request->Tanggal_Cuti)->format('Y-m-d');
        Cuti::insert([
            'Nomor_Induk'=> $request->Nomor_Induk,
            'Tanggal_Cuti' => $tanggal_cuti,
            'Lama_Cuti' => $request->Lama_Cuti,
            'Keterangan' => $request->Keterangan
        ]); 

        return redirect()->back();
    }

}
