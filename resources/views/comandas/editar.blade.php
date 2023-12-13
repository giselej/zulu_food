<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('comandas.update')}}" method="POST" >
    @csrf

    <input type="hidden" name="id" value="{{$comanda->id}}">
    numero-mesa: <input type="text" name="numero_mesa" value="{{$comanda->numero_mesa}}">
    cliente: <input type="text" name="cliente" value="{{$comanda->cliente}}">
    usuario-id: <input type="text" name="usuario_id" value="{{$comanda->usuario_id}}">

</form>