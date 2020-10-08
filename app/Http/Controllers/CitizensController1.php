<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\citizen;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $penduduk = DB::table('citizens')->get();
        $citizens = citizen::all();

        return view('datapenduduk', compact('citizens') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Return view ('penduduk/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required|size:16',
            'Nama' => 'required',
            'Usia' => 'required',
            'JenisKelamin' => 'required',
            'Alamat' => 'required'
        ]);
        
        Citizen::create($request->all());
        return redirect('/datapenduduk')->with('status','Data Penduduk Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(citizen $citizen)
    {
        return view ('Penduduk/detail', compact ('citizen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(C)
    {
        return view ('penduduk.edit', compact($citizen));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(citizen $citizen)
    {
        citizen::destroy($citizen->ID);
        return redirect('/datapenduduk')->with('status', 'Data Penduduk Behasil Dihapus!');
    }
}
