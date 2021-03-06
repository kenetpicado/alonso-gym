@extends('layout')

@section('title', 'Editar ingreso')

@section('contenido')
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('egresos.index') }}">Egresos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <x-header-0 text='Editar'></x-header-0>

            {{-- FORM EDIT --}}
            <x-edit-form ruta='egresos.update' :id="$egreso->id">
                <div class="row">
                    <x-input-list label='tipo' text="Concepto" :val="$egreso->tipo" class="col-lg-6"
                        list="egresos-categorias"></x-input-list>
                </div>
                <div class="row">
                    <x-input-form label='nota' text="Descripción" :val="$egreso->nota" class="col-lg-6"></x-input-form>
                </div>
                <div class="row">
                    <x-input-form label='monto' :val="$egreso->monto" class="col-lg-3"></x-input-form>
                    <x-input-form label='created_at' type='date' text="Fecha" :val="$egreso->created_at" class="col-lg-3">
                    </x-input-form>
                </div>
            </x-edit-form>
            <x-cat-egresos></x-cat-egresos>
        </div>
    </div>
@endsection
