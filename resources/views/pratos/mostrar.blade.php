<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<tr>
    <td> {{$prato->id}} </td>
    <td> {{$prato->nome}} </td>
    <td> {{$prato->valor}} </td>
</tr>