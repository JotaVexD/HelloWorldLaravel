<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=\App\Empresa::all();
        return view('empresas.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

            $empresas = new \App\Empresa;
            $empresas->name=$request->get('name');
            $empresas->email=$request->get('email');
            $empresas->phone=$request->get('phone');
            $empresas->address=$request->get('address');
            $empresas->save();
            
        }catch (\Exception $e){
            return redirect('empresa/create')->with('Falhou', 'Empresa já Cadastrada');
        }
        return redirect('empresa')->with('success', 'Empresa adicionada');
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
        $empresa = \App\Empresa::find($id);
        return view('empresas.edit',compact('empresa','id'));
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
        $empresa= \App\Empresa::find($id);

        $empresa->name = $request->name;
        $empresa->email = $request->email;
        $empresa->phone = $request->phone;
        $empresa->address = $request->address;

        $empresa->save();
        return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = \App\Empresa::find($id);
        $empresa->delete();
        
        return redirect('empresa')->with('success','Empresa deletada');
    }
    
}
