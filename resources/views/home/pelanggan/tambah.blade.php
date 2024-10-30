@extends('layouts.master')
@section('titlr','pelanggan')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="caed">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Pelanggan</h3>
                        </div>
                        <hr>
                        <div class="card-body">
                            <form action="/pelanggan/simpan" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                        <br>
                                        <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="alamat"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                        <br>
                                        <div class="mb-3">
                                    <label for="" class="form-label">Nomer Telepon</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="tlp"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                        <br>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a class="btn btn-dark" href="/pelanggan">Kembali</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection