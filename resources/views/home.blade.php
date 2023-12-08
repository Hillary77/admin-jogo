@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Painel de Controle</h1>
            </div>
        </div>
    </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $usersCount }}</h3>
                            <p>Adminitradores</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $jogadoresCount }}</h3>
                            <p>Jogadores</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registros Perguntas Geral</h3>
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
        </div>
    </section>
@endsection
