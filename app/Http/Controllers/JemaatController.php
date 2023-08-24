<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\Jemaat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JemaatController extends Controller
{
    public function index(Request $request, Jemaat $jemaats)
    {
        $q = $request->input('q');
        $jemaat = DB::table('jemaats')
        ->select('jemaats.id_jemaat','jemaats.nama','jemaats.nik','jemaats.tempat_lahir','jemaats.tanggal_lahir','jemaats.gol_darah','jemaats.jenis_kelamin','jemaats.alamat_jemaat','jemaats.no_telepon','wilayahs.nama_wilayah','pelayanans.jenis_pelayanan')
        ->join('wilayahs','jemaats.id_wilayah','=','wilayahs.id_wilayah')
        ->join('pelayanans','jemaats.id_pelayanan','=','pelayanans.id_pelayanan')
        ->orderBy('jemaats.id_jemaat','ASC')
        ->paginate(5);
        // $jemaat = Jemaat::paginate(5);
        // dd($jemaat);
        return view('dashboard.jemaat', compact('jemaat'));
    }

    public function create(Request $request, Jemaat $jemaats)
    {
        $pelayanan = DB::table('pelayanans')->select('id_pelayanan', 'jenis_pelayanan')->get();
        // dd($pelayanan);
        $wilayah = DB::table('wilayahs')->select('id_wilayah', 'nama_wilayah')->get();
        return view('dashboard.jemaat.create', ['dataPelayanan'=>$pelayanan,'dataWilayah'=>$wilayah]);
    }
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'nik' => $request->input('nik'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'gol_darah' => $request->input('gol_darah'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat_jemaat' => $request->input('alamat_jemaat'),
            'no_telepon' => $request->input('no_telepon'),
            'id_wilayah' => $request->input('nama_wilayah'),
            'id_pelayanan' => $request->input('nama_pelayanan'),
        ];

        DB::table('jemaats')->insert($data);
        return redirect('/jemaat');
    }
    public function edit($id_jemaat) {
        $jemaat = Jemaat::find($id_jemaat);
        $pelayanan = DB::table('pelayanans')->select('id_pelayanan', 'jenis_pelayanan')->get();
        // dd($pelayanan);
        $wilayah = DB::table('wilayahs')->select('id_wilayah', 'nama_wilayah')->get();
        // dd($jemaat);
        return view('dashboard.jemaat.edit',compact(['jemaat'], ['pelayanan'], ['wilayah']));
    }
    public function update($id_jemaat, Request $request)
    {
        $jemaat = Jemaat::find($id_jemaat);
        $jemaat->update($request->except(['_token','simpan','updated_at']));
        return redirect('/jemaat');
    }

    public function destroy($id_jemaat)
    {
        $jemaat = Jemaat::find($id_jemaat);
        $jemaat->delete();
        return redirect('/jemaat    ');
    }
    // public function totalWilayah($wilayah)
    // {
    //     $wilayah = DB::table('wilayahs')->select('id_wilayah', 'nama_wilayah')->get();

    // }

}
