<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id)
    {
        $empresa_id = \App\Empresa::find($empresa_id);
        $funcionarios = $empresa_id->funcionario;
       
        return view('funcionarios.list', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = DB::table('empresas')->pluck('name','id');
        

        return view('funcionarios.create_funcio', compact('empresa'));
        
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
            
            $funcionarios = new \App\Funcionario;
            $funcionarios->name=$request->get('name');
            $funcionarios->email=$request->get('email');
            $funcionarios->phone=$request->get('phone');
            $funcionarios->address=$request->get('address');
            $funcionarios->salario=$request->get('salario');
            $funcionarios->empresa_id=$request->get('empresa_id');
         

            $funcionarios->save();
            
        }catch (\Exception $e){
            return redirect('funcionario/create')->with('Falhou', 'Funcionario já Criado');
        }
        return redirect('empresa')->with('success', 'Funcionario adicionada');
    
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
        $funcionario = \App\Funcionario::find($id);
        return view('funcionarios.edit_funcio',compact('funcionario','id'));
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
        $funcionario= \App\Funcionario::find($id);

        $funcionario->name = $request->name;
        $funcionario->email = $request->email;
        $funcionario->phone = $request->phone;
        $funcionario->address = $request->address;
        $funcionario->salario = $request->salario;

        $funcionario->save();
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
        $funcionario = \App\Funcionario::find($id);
        $funcionario->delete();
        return redirect()->back()->with('success','Funcionario deletado');
    }
}
