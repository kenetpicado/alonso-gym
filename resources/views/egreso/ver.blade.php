@extends('layout')

@section('title', 'Otro')

@section('contenido')
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('egresos.index')}}">Egresos</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ ucwords(strtolower($value)) }}</li>
            </ol>
        </nav>

        <!-- DataTales -->
        <div class="card mb-4">

            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$value}}</h6>
                <a href="#" class="d-inline btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#agregar">
                    <i class="fas fa-plus fa-sm text-white-50"></i>
                    <label class="m-0 d-none d-lg-inline">Agregar</label>
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Nota</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($egresos as $egreso)
                                <tr>
                                    <td>{{ $egreso->tipo }}</td>
                                    <td>{{ $egreso->nota }}</td>
                                    <td>C$ {{ $egreso->monto }}</td>
                                    <td> {{ date('d F y', strtotime($egreso->created_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection('contenido')

@section('agregarModal')
    @include('egreso.modal')
@endsection

@section('re-open')
    @if ($errors->any())
        <script>
            $('#agregar').modal('show')
        </script>
    @endif
@endsection
