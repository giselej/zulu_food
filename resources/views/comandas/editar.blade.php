<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('comandas.update',$comanda)}}" method="POST" >
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{$comanda->id}}">
    numero-mesa: <input type="text" name="numero_mesa" value="{{$comanda->numero_mesa}}">
    cliente: <input type="text" name="cliente" value="{{$comanda->cliente}}">
    <button type="submit">cadastrar</button>
</form>