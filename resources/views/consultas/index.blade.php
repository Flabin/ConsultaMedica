@extends('layouts.app')
@section('content')

    <body>
        <div calss="container-fluid">
            <div class="col-auto">
                <h1>Consultas marcadas</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
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
                            <td><a class="btn btn-primary" href="{{ 'consulta.edit' }}" role="button">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
