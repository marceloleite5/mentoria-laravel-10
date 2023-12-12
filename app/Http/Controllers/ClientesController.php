<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestCliente;
use App\Models\Componentes;
use App\Models\Produto;
use App\Models\Cliente;
use Brian2694\Toastr\Facades\Toastr;

class ClientesController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');
      
        return view('pages.clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Cliente::find($id);
        $buscaRegistro->delete();
        Toastr::success('Arquivo excluído com sucesso!');
        return response()->json(['success' => true]);
    }

    public function cadastrarCliente(FormRequestCliente $request)
    {
        if ($request->method() == "POST"){
           $data = $request->all();
           Cliente::create($data);

           Toastr::success('Gravado com sucesso!');
           return redirect()->route('cliente.index');
        }

        return view('pages.clientes.create');
    }

    public function atualizarCliente(FormRequestCliente $request, $id)
    {
        if ($request->method() == "PUT"){
           $data = $request->all();
           $componentes = new Componentes();
           $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);   
           $buscaRegistro = Cliente::find($id);
           $buscaRegistro->update($data);

           Toastr::success('Atualizado com sucesso!');
           return redirect()->route('cliente.index');
         
        }
        $findCliente = Cliente::where('id', '=', $id)->first();
        return view('pages.clientes.atualiza', compact('findCliente'));
    }
}
