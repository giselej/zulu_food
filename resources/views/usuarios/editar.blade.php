<nav>
    <a href="{{route('usuarios.index')}}">usuarios</a>
    <a href="{{route('pratos.index')}}">pratos</a>
    <a href="{{route('comandas.index')}}">comandas</a>
    <a href="{{route('pagamentos.index')}}">pagamentos</a>
</nav>
<form action="{{route('usuarios.update',$usuario)}}" method="POST" >
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{$usuario->id}}">
    nome: <input type="text" name="nome" value="{{$usuario->name}}">
    email: <input type="text" name="email" value="{{$usuario->email}}">

    senha: <input type="password" name="senha">
    <button type="submit">cadastrar</button>

</form>