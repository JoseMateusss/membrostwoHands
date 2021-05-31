@extends('layouts.main')

@section('link')
    <link href="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('title')
    <h1 class="h3 mb-2 text-gray-800">Usuários do Sistema
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Novo usuário</a>
    </h1>
@endsection

@section('page-content')
    {{-- <div class="card">
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
                                @if ($loggedId !== intval($user->id))
                                    <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}" class="d-inline" onsubmit="return confirm ('Tem certeza que deseja excluir este usuário?')">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger">Deletar</button>
                                    </form>
                                @endif
                                @if ($loggedId == intval($user->id)) 
                                    <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}" class="d-inline" onsubmit="return confirm ('Tem certeza que deseja excluir este usuário?')">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger" disabled>Deletar</button>
                                    </form>
                                @endif
                                
                                
                            </td>
                        </tr>
                
                    @endforeach
                </tbody>
            </table>

            
        </div>
    </div> --}}
    <div class="card shadow mb-4 mt-3">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Opções</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Opções</th>
                        </tr>
                    </tfoot>    
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
@section('scripts')

<script src="{{ url('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets/js/demo/datatables-demo.js') }}"></script>
@endsection
@endsection