<?php

namespace App\Http\Controllers;

use App\Models\Ibadah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IbadahController extends Controller
{
    public function index(Request $request, Ibadah $ibadahs)
    {
     $q = $request->input('q');
     $ibadah = Ibadah::paginate(5);
     return view('dashboard.jadwal', compact('ibadah'));
    }

    public function create(Request $request, Ibadah $ibadahs)
    {
     return view('dashboard.jadwal.create', compact('ibadahs'));
    }

    public function store(Request $request)
    {
        Ibadah::create($request->except(['_token','simpan','updated_at']));
        return redirect('/jadwal');
    }

    public function edit($id_ibadah)
    {
        $ibadah = Ibadah::find($id_ibadah);
        return view('dashboard.jadwal.edit',compact(['ibadah']));
    }

    public function update($id_ibadah, Request $request)
    {
        $ibadah = Ibadah::find($id_ibadah);
        $ibadah->update($request->except(['_token','simpan','updated_at']));
        return redirect('/jadwal');
    }

    public function destroy($id_ibadah)
    {
        $ibadah = Ibadah::find($id_ibadah);
        $ibadah->delete();
        return redirect('/jadwal');
    }
}
