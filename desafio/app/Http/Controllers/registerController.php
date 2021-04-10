<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelGuitar;

class registerController extends Controller
{
    public function listingPageGuitars()
    {
        $guitar = modelGuitar::all();
        return view ('listGuitars',['guitar'=> $guitar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function registerPageGuitar()
    {
       return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function saveGuitar(Request $request)
    {
        $cad = modelGuitar::create([
            'marca'=>$request->marca,
                'modelo'=>$request->modelo,
                'ano'=>$request->ano,
                'preco'=>$request->preco,
                'foto'=>$request->foto,
                'cor'=>$request->cor,
                'descricao'=>$request->descricao
        ]);    

        if ($cad)
        {
            return redirect ('listagem');
        }   
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editGuitar($id)
    {
        $guitar = modelGuitar::find($id);
        return view ('create',['guitar'=> $guitar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function saveGuitarEdit(Request $request, $id)
    {
        $objguitar = new modelGuitar();
        $objguitar->where(['id'=>$id])->update([
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

    public function deleteGuitar($id)
    {
        $objguitar = new modelGuitar();
        $objguitar->where(['id'=>$id])->delete();
        return redirect('listagem');
    }
}
