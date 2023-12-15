<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('usuarios.store')}}" method="POST" >
    @csrf
    nome: <input type="text" name="nome">
    email: <input type="text" name="email">
    senha: <input type="password" name="senha">
    <button type="submit">cadastrar</button>

</form>