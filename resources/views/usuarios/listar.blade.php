<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('usuarios.create')}}">cadastrar</a>
@foreach ($lista as $usuario)
<tr>
    <td> {{$usuario->id}} </td>
    <td> {{$usuario->name}} </td>
    <td> {{$usuario->email}} </td>
</tr>
@endforeach