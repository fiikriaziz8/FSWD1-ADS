<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Carbon\Carbon;

class KaryawanController extends Controller
{
    public function all_karyawan(){
        $karyawan = Karyawan::all();
        return response()->json($karyawan);
    }

    public function karyawan_first_3(){
        $karyawan_first3 = Karyawan::get()->sortBy('Tanggal_Bergabung')->take(3);
        return response()->json($karyawan_first3);
    }

    public function index(){
        $karyawan = Karyawan::all();
        $karyawan_first3 = Karyawan::get()->sortBy('Tanggal_Bergabung')->take(3);
        return view('halaman1',[
            'karyawan' => $karyawan,
            'karyawan_first3' => $karyawan_first3
        ]);
    }

    public function post_karyawan(Request $request){
        if(Karyawan::where('Nomor_Induk', $request->Nomor_Induk)->first() == null){
            $tanggal_lahir = Carbon::createFromFormat('d/m/Y', $request->Tanggal_Lahir)->format('Y-m-d');
            $tanggal_bergabung = Carbon::createFromFormat('d/m/Y', $request->Tanggal_Bergabung)->format('Y-m-d');
            Karyawan::insert([
                'Nomor_Induk' => $request->Nomor_Induk,
                'Nama' => $request->Nama,
                'Alamat' => $request->Alamat,
                'Tanggal_Lahir' => $tanggal_lahir,
                'Tanggal_Bergabung' => $tanggal_bergabung
            ]);
        }else{
            Karyawan::where('Nomor_Induk', $request->Nomor_Induk)->update([
                'Nomor_Induk' => $request->Nomor_Induk,
                'Nama' => $request->Nama,
                'Alamat' => $request->Alamat,
                'Tanggal_Lahir' => $request->Tanggal_Lahir,
                'Tanggal_Bergabung' => $request->Tanggal_Bergabung
            ]);
        }
        
        return redirect()->back();
    }

    public function delete_karyawan(Request $request){
        Karyawan::where('Nomor_Induk', $request->id)->delete();
        return redirect()->back();
    }

}
