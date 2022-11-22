@extends('layouts.app')
@section('content')

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mt-3">
                    <div class="card">
                        <div class="card-body ">
                            <form action="{{ route('consulta.index') }}" method="get">
                                <h1>Consultas marcadas</h1>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-outline-primary" href="{{ route('consulta.create') }}" role="button"><i
                                            class="fa-solid fa-plus"></i>
                                        Novo</a>
                                </div>

                            </form>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="mb-6">
                                    <th>Status</th>
                                    <th>Nome paciente</th>
                                    <th>Nome medico</th>
                                    <th>Horario da comsulta</th>
                                    <th>Data da consulta</th>
                                    <th>Data do agendamento</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Realizada / em aberto</td>
                                    <td>Nome do paciente</td>
                                    <td>Nome do médico</td>
                                    <td>13:00</td>
                                    <td>15/12/2022</td>
                                    <td>12:24 18/11/2022</td>
                                    <td><a class="btn btn-primary" href="{{ 'consulta.edit' }}" role="button">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
