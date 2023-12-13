<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('pagamentos.create')}}">cadastrar</a>

@foreach ($lista as $pagamento)
<tr>
    <td> {{$pagamento->id}} </td>
    <td> {{$pagamento->tipo}} </td>
    <td> {{$pagamento->valor}} </td>
    <td> {{$pagamento->comanda->numero_mesa}} </td>
</tr>
@endforeach