@extends('adminlte::page')
@section('title', 'ABSENSI | SIMDES')
@section('content_header')
    <h1 class="m-0 text-dark">Absensi</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <x-adminlte-select2 name="sel2Basic" label="PILIH NAMA" fgroup-class="col-md-12">
                                <option value="">PILIH NAMA PEGAWAI</option>
                                <option disabled>Option 2</option>
                                <option selected>Option 3</option>
                            </x-adminlte-select2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-adminlte-button class="btn-flat" type="submit" label="LAKUKAN PRESENSI" theme="success"
                                    icon="fas fa-lg fa-save" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
