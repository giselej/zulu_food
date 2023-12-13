<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('comandas.create')}}">cadastrar</a>

@foreach ($lista as $comanda)
<tr>
    <td> {{$comanda->id}} </td>
    <td> {{$comanda->numero_mesa}} </td>
    <td> {{$comanda->cliente}} </td>
    <td> {{$comanda->usuario->name}} </td>
</tr>
@endforeach