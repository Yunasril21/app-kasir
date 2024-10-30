@extends('layouts.master')
@section('title','pelanggan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="caed">
                        <div class="card-header">
                            <h3>Halaman Data Pelanggan</h3>
                            <br>
                            <a class="btn btn-primary" href="/pelanggan/tambah"
                            onluclick>Tambah</a>
                        </div>
                        <hr>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-berdered table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Nomor Telepon</th>
                                            <th scope="col">Actiom</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pelanggan as $pelanggan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pelanggan->nama }}</td>
                                            <td>{{ $pelanggan->alamat }}</td>
                                            <td>{{ $pelanggan->tlp }}</td>
                                            <td><a class="btn btn-dark" href="/pelanggan/{{ $pelanggan->id }}/show">Edit</a>
                                                <a class="btn btn-primary" href="/pelanggan/{{ $pelanggan->id }}/delete"
                                                    onclick="return confirm('Yakin?')">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection