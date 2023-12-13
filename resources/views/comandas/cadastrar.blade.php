<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('comanda.store')}}" method="POST" >
    @csrf
    numero-mesa: <input type="text" name="numero_mesa">
    cliente: <input type="text" name="cliente">
    usuario-id: <input type="text" name="usuario_id">
    <button type="submit">cadastrar</button>

</form>