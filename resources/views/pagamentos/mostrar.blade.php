<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<tr>
    <td> {{$pagamento->id}} </td>
    <td> {{$pagamento->tipo}} </td>
    <td> {{$pagamento->valor}} </td>
    <td> {{$pagamento?->comanda?->numero_mesa}} </td>
</tr>