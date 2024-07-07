<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BarangController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $data = barang::where('namabarang','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else
        {
            $data = barang::paginate(5);
        }
        return view('index', compact('data'));
    }

    public function insertbarangpage()
    {
        return view('insertbarangpage');
    }


    public function insertbarang(Request $request)
    {
        if($request->has('namabarang'))
        {
            $checkbarang = barang::where('namabarang', $request->namabarang)->first();
            if(!$checkbarang)
            {
                $data = barang::create($request->all());
                if($request->hasFile('fotobarang'));
                {
                    $request->file('fotobarang')->move('barang/',$request->file('fotobarang')->getClientOriginalName());
                    $data->fotobarang=$request->file('fotobarang')->getClientOriginalName();
                    $data->save();
                }
                return redirect()->Route('index')->with('success', 'barang berhasil ditambahkan.');
            }
            else
            {
                return redirect()->route('index')->with('failed', 'nama barang sudah digunakan.');
            }
        }
        
    }

    public function hapus($id)
    {
        $data = barang::find($id);
        /*
        if(File::exists(public_path('barang/'.$data->fotobarang)))
        {
            File::delete(public_path('barang/'.$data->fotobarang));
        }
        */
        $data->delete();
        return redirect()->Route('index');
    }

    public function formedit($id)
    {
        $data = barang::find($id);
        return view('edit',compact('data'));
    }

    public function editbarang($id, Request $request)
    {
        $data = barang::find($id);
        
        $data->update($request->all());
        if($request->fotobarang != null)
        {
            if($request->hasFile('fotobarang'));
            {
                $request->file('fotobarang')->move('barang/',$request->file('fotobarang')->getClientOriginalName());
                $data->fotobarang=$request->file('fotobarang')->getClientOriginalName();
                $data->save();
            }
        }
        return redirect()->route('index')->with('edited', 'barang telah di update.');
    }
}
