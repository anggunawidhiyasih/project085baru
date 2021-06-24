<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =Categorie::all();
        return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $validate = Validator::make($request->all(), [
       //     'nama' => 'required',
        //    
       // ]);
       //     if($validate->passes()) {
       // $task = Task::create($request->all());
       // return response()->json([
        //    'message' => 'oke sukses ngabs!!, tasks berhasil disimpan',
       //     'task' => $task
       // ]);
   // }
    //return response()->json([
      //  'message' => 'data error',
      //  'task' => $validate- >error()-> all()
       // ]);
       $request->validate([
        'nama' => 'required',
        
    ]);

    $categorie = Categorie::create($request->all());

    return response()->json([
        'message' => 'berhasil disimpan',
        'categorie' => $categorie
    ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        
         //  $task = Task::where('id',$task)->first();
          //  if (!empty($task)){
            return $task;
            //  }
            //  re
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            'nama'       => 'nullable',
            
         ]);
 
         $categorie->update($request->all());
 
         return response()->json([
             'message' => 'WOWzz updated',
             'categorie' => $categorie
         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return response()->json([
          'message' => 'Sukses menghapus task!'
         ]);
    }
}
