<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('pagamentos.update',$pagamento)}}" method="POST" >
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{$pagamento->id}}">
    tipo: <input type="text" name="tipo" value="{{$pagamento->tipo}}">
    valor: <input type="text" name="valor" value="{{$pagamento->valor}}">
    comanda-id: <input type="text" name="comanda_id" value="{{$pagamento->comanda_id}}">
    <button type="submit">cadastrar</button>

</form>