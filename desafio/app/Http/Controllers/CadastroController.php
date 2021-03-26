<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelGuitarra;

class CadastroController extends Controller
{
    private $objguitarra;

    public function __construct(){
        $this->objguitarra = new ModelGuitarra();
        
    }

    public function index()
    {
        $guitarra = $this->objguitarra->all();
        return view ('listagem', compact('guitarra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cad= $this->objguitarra->create([
                'marca'=>$request->marca,
                'modelo'=>$request->modelo,
                'ano'=>$request->ano,
                'preco'=>$request->preco,
                'foto'=>$request->foto,
                'cor'=>$request->cor,
                'descricao'=>$request->descricao
            ]);

        if ($cad){
            return redirect ('listagem');
        }   

    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guitarra=$this->objguitarra->find($id);
        return view ('create', compact('guitarra'));
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
        
        $this->objguitarra->where(['id'=>$id])->update([
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'ano'=>$request->ano,
            'preco'=>$request->preco,
            'foto'=>$request->foto,
            'cor'=>$request->cor,
            'descricao'=>$request->descricao
        ]);

        return redirect ('listagem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objguitarra->where(['id'=>$id])->delete();
        return redirect('listagem');
    }
}
