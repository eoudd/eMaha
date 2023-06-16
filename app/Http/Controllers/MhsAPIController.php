<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsAPIController extends Controller
{
    public function read()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'data berhasil di tampilkan',
            'data' => $mhs],200);
    }
    public function create(Request $request){
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat,
        ]);
        if ($mhs)
        {
            return response()->json([
                'success' =>true,
                'message' => 'Berhasil Disimpan',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',
            ], 401);
        }
    }

    public function update($id, Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);
        if ($mhs)
        {
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Diubah',
        ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Diubah',
            ], 400);
        }
    }
    public function delete($id){
        $mhs = Mahasiswa::whereId($id)->delete();
        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Dihapus'
            ],200);
        }
        else{
            return response()->json([
                'success'=>false,
                'message'=>'Data Gagal Dihapus'
            ],401);
        }
    }
}
