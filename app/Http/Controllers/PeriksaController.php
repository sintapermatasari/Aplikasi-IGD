<?php

namespace App\Http\Controllers;

use App\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $periksas = Periksa::latest()->paginate(5);
  
        return view('periksas.index',compact('periksas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('periksas.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_pasien' => 'required',
            'nama_pasien' => 'required',
            'penyakit_diderita' => 'required',
            'penyakit_dialami' => 'required',
            'keterangan' => 'required',
        ]);
  
        Periksa::create($request->all());
   
        return redirect()->route('periksas.index')
                        ->with('success','Periksa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periksa  $periksa
     * @return \Illuminate\Http\Response
     */
    public function show(Periksa $periksa)
    {
         return view('periksas.show',compact('periksa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periksa  $periksa
     * @return \Illuminate\Http\Response
     */
    public function edit(Periksa $periksa)
    {
        
         return view('periksas.edit',compact('periksa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periksa  $periksa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periksa $periksa)
    {
        $request->validate([
            'kd_pasien' => 'required',
            'nama_pasien' => 'required',
            'penyakit_diderita' => 'required',
            'penyakit_dialami' => 'required',
            'keterangan' => 'required',
        ]);
  
        $periksa->update($request->all());
  
        return redirect()->route('periksas.index')
                        ->with('success','Periksa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periksa  $periksa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periksa $periksa)
    {
         $periksa->delete();
  
        return redirect()->route('periksas.index')
                        ->with('success','Periksa deleted successfully');
    }
}
