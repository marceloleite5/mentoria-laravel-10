@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Vendas</h1>   
  </div>  
  <div>
    <form action="{{ route('venda.index') }}" method="get">
      <input type="text" name="pesquisar" placeholder="Digite o nome" id="">
      <button class="btn btn-light btn-sm">Pesquisar</button>
      <a type="button" href="{{ route('cadastrar.venda')}}" class="btn btn-success float-end">Incluir Venda</a>
    </form>
    <div class="table-responsive mt-4">
      @if ($findVenda->isEmpty())
          <p>Nenhum dado cadastrado!</p>
      @else
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Código</th>
            <th>Produto</th>
            <th>Cliente</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($findVenda as $venda)
          <tr>
            <td>{{ $venda->numero_da_venda }}</td>
            <td>{{ $venda->produto->nome }}</td>
            <td>{{ $venda->cliente->nome }}</td>
            <td>
              <a href="{{ route('enviaComprovantePorEmail.venda', $venda->id )}}" class="btn btn-light btn-sm">
                Enviar E-mail
              </a>
             
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
      @endif
    </div>
  </div>
@endsection
