@extends('adminlte::page')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>HTML</h1>
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
                                <h3 class="card-title">Registros HTML</h3>
                            </div>
                            <!-- ./card-header -->
                            <div class="card-body">
                                <table class="table-bordered table-hover">
                                  
                                        <tr>
                                            <th>#</th>
                                            <th>Pergunta</th>
                                            <th>Subfase</th>
                                            <th>Resposta</th>
                                            <th>Botão</th>

                                        </tr>
                                    <tbody>
                                        @foreach ($dados as $value)
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td>
                                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                </td>
                                                <td>{{ $value->pergunta }}</td>
                                                <td>{{ $value->subfase }}</td>
                                                <td>{{ $value->resposta_correta }}</td>
                                                <td>
                                                    <form action="{{ route('html.destroy', $value->id) }}" method="POST">
                                                        <a type="button"
                                                            class="btn btn-outline-success btn-sm rounded-circle"
                                                            href="{{ route('html.edit', $value->id) }}"><i class="fa-solid fa-trash"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="perguntas" value="{{ $value->id }}">
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm rounded-circle"><i class="fa-solid fa-trash"></i></button>
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
        <!-- /.content -->
    </div>
@endsection