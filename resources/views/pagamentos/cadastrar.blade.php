<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('pagamentos.store')}}" method="POST" >
    @csrf
    tipo <select name="tipo">
        <option value="pix">Pix</option>
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao">Cartão</option>
        </select>
    valor: <input type="text" name="valor">
    numero da mesa<select name="comanda_id">
        @foreach ($comandas as $comanda )
            <option value="{{$comanda->id}}">{{$comanda->numero_mesa}}</option>
        @endforeach
        </select>
         <button type="submit">cadastrar</button>

</form>