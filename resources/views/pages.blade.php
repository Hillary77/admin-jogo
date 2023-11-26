@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dependências e Extensões</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">AdminCodeMaster</h3>
                             <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <ul>
                                <li>PHP: ^8.0.2</li>
                                <li>guzzlehttp/guzzle: ^7.2</li>
                                <li>jeroennoten/laravel-adminlte: ^3.9</li>
                                <li>laravel/framework: ^9.19</li>
                                <li>laravel/sanctum: ^3.0</li>
                                <li>laravel/tinker: ^2.7</li>
                                <li>laravel/ui: ^4.2</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                   <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jogo CodeMaster</h3>
                             <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <ul>
                               <li>PHP: ^8.0</li>
                                <li>fruitcake/laravel-cors: ^2.0.5</li>
                                <li>guzzlehttp/guzzle: ^7.2</li>
                                <li>laracasts/flash: ^3.2</li>
                                <li>laravel/framework: ^9.0</li>
                                <li>laravel/sanctum: ^2.14</li>
                                <li>laravel/tinker: ^2.7</li>
                                <li>laravel/ui: ^4.2</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
