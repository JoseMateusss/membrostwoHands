@extends('layouts.main')

@section('title')
    <h2>Usuários do Sistema
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Novo usuário</a>
    </h2>
@endsection

@section('page-content')
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-info" >Editar</a>
                                {{-- @if ($loggedId !== intval($user->id))
                                <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}" class="d-inline" onsubmit="return confirm ('Tem certeza que deseja excluir este usuário?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Deletar</button>
                                </form>
                                @endif --}}
                                
                                <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}" class="d-inline" onsubmit="return confirm ('Tem certeza que deseja excluir este usuário?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Deletar</button>
                                </form>
                                
                                
                            </td>
                        </tr>
                
                    @endforeach
                </tbody>
            </table>
            
        </div>
        
    </div>  
@endsection