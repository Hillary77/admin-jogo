@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CSS</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.row -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registros CSS</h3>
                        </div>
                        <!-- ./card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="table-info">
                                    <tr>
                                        <th>#</th>
                                        <th>Pergunta</th>
                                        <th>Subfase</th>
                                        <th>Resposta</th>
                                        <th>Pontos</th>
                                        <th>Botão</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dados as $value)
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>
                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                            </td>
                                            <td>{{ $value->pergunta }}</td>
                                            <td>{{ $value->subfase }}</td>
                                            <td>{{ $value->resposta_correta }}</td>
                                            <td>{{ $value->pontos }} pontos</td>
                                            <td>
                                                <form action="{{ route('css.destroy', $value->id) }}" method="POST">
                                                    <a type="button" class="btn btn-outline-success btn-sm rounded-circle"
                                                        href="{{ route('css.edit', $value->id) }}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="perguntas" value="{{ $value->id }}">
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm rounded-circle"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr class="expandable-body">
                                            <td colspan="8">
                                                <div class="p-0">
                                                    <table class="table table-hover">
                                                        <tr>
                                                            <th>Opção 01</th>
                                                            <th>Opção 02</th>
                                                            <th>Opção 03</th>
                                                            <th>Opção 04</th>
                                                        </tr>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $value->opcao1 }}</td>
                                                                <td>{{ $value->opcao2 }}</td>
                                                                <td>{{ $value->opcao3 }}</td>
                                                                <td>{{ $value->opcao4 }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
