<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<a href="{{route('pagamentos.create')}}">cadastrar</a>
<table border="1">
    <tr>
        <td>id</td>
        <td>tipo de pagamento</td>
        <td>valor</td>
        <td>numero da mesa</td>
        <td colspan="3"></td>
    </tr>
@foreach ($lista as $pagamento)
<tr>
    <td> {{$pagamento->id}} </td>
    <td> {{$pagamento->tipo_pagamento}} </td>
    <td> {{$pagamento->valor}} </td>
    <td> {{$pagamento?->comanda?->numero_mesa}} </td>
    <td> <a href="{{route('pagamentos.show',$pagamento)}}">Mostrar</a></td>
    <td> <a href="{{route('pagamentos.edit',$pagamento)}}">Editar</a></td>
    <td>
        <form action="{{route('pagamentos.destroy', $pagamento)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">deletar</button>
        </form>
    </td>
</tr>
@endforeach
</table>