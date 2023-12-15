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
    tipo <select name="tipo">
        <option value="pix">Pix</option>
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao">Cartão</option>
        </select>
    valor: <input type="text" name="valor" value="{{$pagamento->valor}}">
    numero da mesa<select name="comanda_id">
    @foreach ($comandas as $comanda )
        <option value="{{$comanda->id}}">{{$comanda->numero_mesa}}</option>
    @endforeach
    </select>
    <button type="submit">cadastrar</button>

</form>