<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Http\Resources\Curso as  CursoResource;

class CursoApiController extends Controller
{
    public function index()
    {
        $result = Curso::all();
        return CursoResource::collection($result);
    }
   
     public function clase_actividad()
     {
        $result = Curso::all();
        return CursoResource::collection($result);
     }
    
    public function edit($id)
    {
        $result= Curso::find($id);
        return new CursoResource($result);
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
    public function destroy($id)
    {
        //
    } 
}
