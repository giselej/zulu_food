<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('comandas.update')}}" method="POST" >
    @csrf

    <input type="hidden" name="id" value="{{$pagamento->id}}">
    tipo: <input type="text" name="tipo" value="{{$pagamento->tipo}}">
    valor: <input type="text" name="valor" value="{{$pagamento->valor}}">
    usuario-id: <input type="text" name="usuario_id" value="{{$pagamento->usuario_id}}">
    comanda-id: <input type="text" name="comanda_id" value="{{$pagamento->comanda_id}}">

</form>