@extends('adminlte::page')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lógica de Programação</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-lg-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edite as Perguntas</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="needs-validation" action="{{ route('logica.update', [$value->id]) }}"
                                method="POST" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPergunta">Pergunta</label>
                                        <input type="text" class="form-control @error('pergunta') is-invalid @enderror"
                                            name="pergunta" id="exampleInputPergunta"
                                            placeholder="Digite uma pergunta sobre lógica" value="{{ $value->pergunta }}">
                                        @error('pergunta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputSubfase">Subfase</label>
                                        <input type="text" class="form-control @error('subfase') is-invalid @enderror"
                                            name="subfase" id="exampleInputSubfase" placeholder="Digite uma subfase"
                                            value="{{ $value->subfase }}">
                                        @error('subfase')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputResposta">Resposta</label>
                                        <input type="text"
                                            class="form-control @error('resposta_correta') is-invalid @enderror"
                                            name="resposta_correta" id="exampleInputResposta"
                                            placeholder="Digite a resposta da pergunta"
                                            value="{{ $value->resposta_correta }}">
                                        @error('resposta_correta')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputOpcao1">Opção - 01</label>
                                        <input type="text" class="form-control @error('opcao1') is-invalid @enderror"
                                            name="opcao1" id="exampleInputOpcao1"
                                            placeholder="Digite uma opção para a pergunta" value="{{ $value->opcao1 }}">
                                        @error('opcao1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputOpcao2">Opção - 02</label>
                                        <input type="text" class="form-control @error('opcao2') is-invalid @enderror"
                                            name="opcao2" id="exampleInputOpcao2"
                                            placeholder="Digite uma opção para a pergunta" value="{{ $value->opcao2 }}">
                                        @error('opcao2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputOpcao3">Opção - 03</label>
                                        <input type="text" class="form-control @error('opcao3') is-invalid @enderror"
                                            name="opcao3" id="exampleInputOpcao3"
                                            placeholder="Digite uma opção para a pergunta" value="{{ $value->opcao3 }}">
                                        @error('opcao3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputOpcao4">Opção - 04</label>
                                        <input type="text" class="form-control @error('opcao4') is-invalid @enderror"
                                            name="opcao4" id="exampleInputOpcao4"
                                            placeholder="Digite uma opção para a pergunta" value="{{ $value->opcao4 }}">
                                        @error('opcao4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
