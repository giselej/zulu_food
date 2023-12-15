<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>

<form action="{{route('comandas.store')}}" method="POST" >
    @csrf
    numero-mesa: <input type="text" name="numero_mesa">
    cliente: <input type="text" name="cliente">
    <button type="submit">cadastrar</button>

</form>