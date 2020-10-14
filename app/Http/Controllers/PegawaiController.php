<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Http\Request;
use Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pegawai::all();
        return view('pegawai.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pegawai' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required'
        ]);
        if($validator->fails()){
            return redirect('pegawai/create')->withErrors($validator)->withInput();
        }
        $data = new Pegawai();
        $data->create($request->all());
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pegawai::findOrfail($id);
        return view('pegawai.edit',compact('data'));
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
        $data = Pegawai::findOrfail($id);
        $simpan = $data->update($request->all());
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::findOrfail($id);
        $data->delete();
        return redirect()->route('pegawai.index');
    }
}
