<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('comandas.create')}}">cadastrar</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>numero da mesa</td>
        <td>nome do cliente</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($lista as $comanda)
    <tr>
        <td> {{$comanda->id}} </td>
        <td> {{$comanda->numero_mesa}} </td>
        <td> {{$comanda->cliente}} </td>
        <td> <a href="{{route('comandas.show',$comanda)}}">Mostrar</a></td>
        <td> <a href="{{route('comandas.edit',$comanda)}}">Editar</a></td>
        <td>
            <form action="{{route('comandas.destroy',$comanda)}}" method="POST">
            @csrf @method('delete')
            <button type="submit">Deletar</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>