<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('pratos.store')}}" method="POST" >
@csrf

    nome: <input type="text" name="nome">
    valor: <input type="text" name="valor">
    <button type="submit">cadastrar</button>
</form>