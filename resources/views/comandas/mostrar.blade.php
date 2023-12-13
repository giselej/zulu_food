<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<tr>
    <td> {{$comanda->id}} </td>
    <td> {{$comanda->numero_mesa}} </td>
    <td> {{$comanda->cliente}} </td>
    <td> {{$comanda->usuario->name}} </td>
</tr>