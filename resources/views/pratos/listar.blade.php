<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('pratos.create')}}">cadastrar</a>

@foreach ($lista as $prato)
<tr>
    <td> {{$prato->id}} </td>
    <td> {{$prato->nome}} </td>
    <td> {{$prato->valor}} </td>
</tr>
@endforeach