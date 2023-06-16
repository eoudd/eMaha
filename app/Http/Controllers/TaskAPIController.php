<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskAPIController extends Controller
{
    public function create(Request $request){
        $task = Task::create([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task,
        ]);
        if ($task)
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
    public function read()
    {
        $task = Task::all();
        return response()->json([
            'success' => true,
            'message' => 'data berhasil di tampilkan',
            'data' => $task],200);
    }
    public function update($id, Request $request)
    {
        $task = Task::find($id)->update([
            'nama' => $request->nama,
            'judul_task' => $request->judul_task,
            'deskripsi_task' => $request->deskripsi_task,
        ]);
        if ($task)
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
        $task = Task::whereId($id)->delete();
        if($task)
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