<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('comanda.store')}}" method="POST" >
    @csrf
    :tipo <input type="text" name="tipo">
    valor: <input type="text" name="valor">
    comanda_id: <input type="text" name="comanda_id">
    usuario_id: <input type="text" name="usuario_id">
    <button type="submit">cadastrar</button>

</form>