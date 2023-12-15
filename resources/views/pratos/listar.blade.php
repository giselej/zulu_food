<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('pratos.create')}}">cadastrar</a>
<table border="1">
@foreach ($lista as $prato)
<tr>
    <td> {{$prato->id}} </td>
    <td> {{$prato->nome}} </td>
    <td> {{$prato->valor}} </td>
    <td> <a href="{{route('pratos.show',$prato)}}">Mostrar</a></td>
    <td> <a href="{{route('pratos.edit',$prato)}}">cadastrar</a></td>
    <td>
        <form action="{{route('pratos.destroy',$prato)}}" method="POST">
        @csrf @method('delete')
        <button type="submit">deletar</button>
        </form>
    </td>
</tr>
@endforeach
</table>