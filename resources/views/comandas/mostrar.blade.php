<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<table border="1">
    <tr>
        <td>id</td>
        <td>numero da mesa</td>
        <td>nome do cliente</td>

    </tr>
<tr>
    <td> {{$comanda->id}} </td>
    <td> {{$comanda->numero_mesa}} </td>
    <td> {{$comanda->cliente}} </td>

</tr>
</table>