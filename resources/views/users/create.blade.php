@extends('layouts.main')


@section('title')
    <h1 class="h3 mb-2 text-gray-800">Adiconar novo usuário</h1>    
@endsection

@section('page-content')

        @if($errors->any())
            <div class="alert alert-danger">
                <h5>
                    <i class="fas fa-exclamation-triangle"></i>
                    Ocorreu um erro
                </h5>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nome Completo</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Senha</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Confirme a senha</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" value="Cadastrar" class="btn btn-success testebutton">
                                </div>
                        </div>
                        
                    </form>
                </div>
            </div>
@section('scripts')
    
@endsection
@endsection