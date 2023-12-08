@extends('adminlte::page')

@section('content')

    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-12">
                <div class="col-lg-12">
                    <h1>CSS</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-lg-12">
                    <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Cadastre as Perguntas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="needs-validation" action="{{ route('css.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPergunta">Pergunta</label>
                                    <input type="text" class="form-control @error('pergunta') is-invalid @enderror"
                                        name="pergunta" id="exampleInputPergunta"
                                        placeholder="Digite uma pergunta sobre CSS">
                                    @error('pergunta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSubfase">Subfase</label>
                                    <input type="text" class="form-control @error('subfase') is-invalid @enderror"
                                        name="subfase" id="exampleInputSubfase" placeholder="Digite uma subfase">
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
                                        placeholder="Digite a resposta da pergunta">
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
                                        placeholder="Digite uma opção para a pergunta">
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
                                        placeholder="Digite uma opção para a pergunta">
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
                                        placeholder="Digite uma opção para a pergunta">
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
                                        placeholder="Digite uma opção para a pergunta">
                                    @error('opcao3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputOpcao4">Pontos</label>
                                    <input type="number" class="form-control @error('pontos') is-invalid @enderror"
                                        name="pontos" id="exampleInputOpcao4"
                                        placeholder="Digite uma pontuação para está pergunta">
                                    @error('pontos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </section>

@stop
