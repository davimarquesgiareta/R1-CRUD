<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelGuitar;

class registerController extends Controller
{
    private $objguitar;

    public function __construct()
    {
        $this->objguitar = new modelGuitar();
       // Static::$objguitar = new modelGuitar();
    }

    public function listingPageGuitars()
    {
        $guitar = $this->objguitar->all();
        return view ('listagem', compact('guitar'));
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
        $cad= $this->objguitar->create([
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
        $guitar=$this->objguitar->find($id);
        return view ('create', compact('guitar'));
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
        $this->objguitar->where(['id'=>$id])->update([
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
        $this->objguitar->where(['id'=>$id])->delete();
        return redirect('listagem');
    }
}
