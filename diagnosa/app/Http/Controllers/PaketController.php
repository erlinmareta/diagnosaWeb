<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paket;


class PaketController extends Controller
{
    public function index()
    {
        $dtPaket = Paket::all();
        return view('admin.paket', compact('dtPaket'));
    }

    public function create()
    {
        return view('admin.tambahPaket');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Paket::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('admin.paket')->with('toast_success', 'Data berhasil ditambhakan!');
       

    }

    public function edit($id)
    {
        $data = Paket::firstWhere('id',$id);
        // echo $id;
        return view('admin.editPaket',[
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'harga'=> 'required',
            'keterangan' => 'required'
        ];

        $validate = $request -> validate($rules);
        Paket::where ('id', $id)->update($validate);
        return redirect('admin.paket');


    }

    public function destroy(Paket $id )
    {
        Paket::destroy($id->id);
        return redirect('admin.paket');   
    }
}
