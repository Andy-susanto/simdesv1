@extends('adminlte::page')

@section('title', 'Data Penduduk | SIMDES')

@section('content_header')
    <h1 class="m-0 text-dark">Data Penduduk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Input Data Penduduk</h2>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <x-adminlte-input name="iLabel" label="Nama" placeholder="Nama Penduduk"
                                fgroup-class="col-md-12" disable-feedback />
                        </div>
                        <div class="row">
                            <x-adminlte-input name="iLabel" label="NIK" placeholder="Nama Penduduk"
                                fgroup-class="col-md-12" disable-feedback />
                        </div>
                        <div class="row">
                            <x-adminlte-input name="iLabel" label="TEMPAT TANGGAL LAHIR" placeholder="Nama Penduduk"
                                fgroup-class="col-md-12" disable-feedback />
                        </div>
                        <div class="row">
                            <x-adminlte-input name="iLabel" label="AGAMA" placeholder="Nama Penduduk"
                                fgroup-class="col-md-12" disable-feedback />
                        </div>
                        <div class="row">
                            <x-adminlte-select2 name="sel2Basic" label="JENIS KELAMIN" fgroup-class="col-md-12">
                                <option>lAKI - LAKI</option>
                                <option disabled>Option 2</option>
                                <option selected>Option 3</option>
                            </x-adminlte-select2>
                        </div>
                        <div class="row">
                            <x-adminlte-select2 name="sel2Basic" label="STATUS" fgroup-class="col-md-12">
                                <option>KAWIN</option>
                                <option disabled>Option 2</option>
                                <option selected>Option 3</option>
                            </x-adminlte-select2>
                        </div>
                        <div class="row">
                            <x-adminlte-select2 name="sel2Basic" label="PEKERJAAN" fgroup-class="col-md-12">
                                <option>PETANI</option>
                                <option disabled>Option 2</option>
                                <option selected>Option 3</option>
                            </x-adminlte-select2>
                        </div>
                        <div class="row">
                            <x-adminlte-select2 name="sel2Basic" label="AGAMA" fgroup-class="col-md-12">
                                <option>ISLAM</option>
                                <option disabled>Option 2</option>
                                <option selected>Option 3</option>
                            </x-adminlte-select2>
                        </div>
                        <div class="row">
                            <x-adminlte-textarea name="taBasic" label="ALAMAT" fgroup-class="col-md-12"
                                placeholder="MASUKAN ALAMAT DISINI..." />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <x-adminlte-button class="btn-flat" type="submit" label="SIMPAN" theme="success"
                                    icon="fas fa-lg fa-save" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
