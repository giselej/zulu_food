<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('usuarios.create')}}">cadastrar</a>
<table border="1">
@foreach ($lista as $usuario)
<tr>
    <td> {{$usuario->id}} </td>
    <td> {{$usuario->name}} </td>
    <td> {{$usuario->email}} </td>
    <td> <a href="{{route('usuarios.show',$usuario)}}">Mostrar</a></td>
    <td> <a href="{{route('usuarios.edit',$usuario)}}">editar</a></td>
    <td>
        <form action="{{route('usuarios.destroy',$usuario)}}" method="POST">
        @csrf @method('delete')
        <button type="submit">deletar</button>
        </form>
    </td>
</tr>
@endforeach
</table>