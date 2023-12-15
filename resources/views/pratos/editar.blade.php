<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('pratos.update',$prato)}}" method="POST" >
    @csrf
    @method('put')
    nome: <input type="text" name="nome" value="{{$prato->nome}}">
    valor: <input type="text" name="valor" value="{{$prato->valor}}">
    <button type="submit">cadastrar</button>

</form>