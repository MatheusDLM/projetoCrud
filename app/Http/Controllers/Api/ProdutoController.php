<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto){ //Constructor do produto
        $this->produto = $produto;
    }
    
    public function index() //Busca todos os produtos
    {
        $produtos = Produto::all()->toArray();
        return array_reverse($produtos);      
    }

    public function store(Request $request) //Cria todos os produtos
    {
        try{
        $produto = new Produto([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
            'quantidade' => $request->input('quantidade'),
            'categoria' => $request->input('categoria'),
            'status' => $request->input('status')
        ]);

        $produto->save();

        return response()->json('Produto criado!');
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
    }

    public function update($id, Request $request) //Edita os produtos
    {
        $produto = Produto::find($id);
        $produto->update($request->all());

        return response()->json('Produto atualizado!');
    }

    public function destroy($id) //Deleta os produtos
    {
        $produto = Produto::find($id);
        $produto->delete();

        return response()->json('Produto deletado!');
    }

    /* public function destroySelect($orgIds){
        $produto = Produto::find($id);
        $ids = explode(",", $id);
        $orgIds = array_intersect($org->products()->lists('id'), $ids);          TESTE
        $orgIds->delete();
    } */
}