<?php

namespace App\Http\Controllers;
use App\Models\Uas;
use Illuminate\Http\Request;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uas = Uas::all();
        return view('uas.index',compact('uas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function create()
    {
        return view('uas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
        $uas = new Uas;

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $uas = Uas::find($id);
        $uas->nama=$request->nama;
        $uas->alamat=$request->alamat;

        $simpan = $uas->save();

        if($simpan){
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/21312032');
        }else{
            Alert::error('Failed', 'Data Gagal ditambah');
        }
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
        $uas = Uas::where('npm',$id)->first();

        return view('uas.edit', compact('uas'));
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

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $uas = Uas::find($id);
        $uas->nama=$request->nama;
        $uas->alamat=$request->alamat;

        $ubah = $uas->save();

        if($ubah){
            Alert::success('Success', 'Data Berhasil diubah');
            return redirect('/21312032');
        }else{
            Alert::error('Failed', 'Data Gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uas = Uas::find($id);
       
        $hapus = $uas->delete();

        if($hapus){
            Alert::success('Success', 'Data Berhasil dihapus');
            return redirect('/21312032');
        }else{
            Alert::error('Failed', 'Data Gagal dihapus');
        }
        return redirect('/21312032');
    }
}
