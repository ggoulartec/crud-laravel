@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('usuarios') }}"></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Request::is('*/edit'))

                            <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" name="name" value="{{ $usuario->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email"  value="{{ $usuario->email }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>

                        @else

                            <form action="{{ url('usuarios/add') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
