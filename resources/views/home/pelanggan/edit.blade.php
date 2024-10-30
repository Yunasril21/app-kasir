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
                            <h3>Halaman Edit Data Pelanggan</h3>
                        </div>
                        <hr>
                        <div class="card-body">
                        <form action="/pelanggan/{{ $pelanggan->id }}/update" method="post">
                            @csrf
                            <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama"
                                        value="{{ $pelanggan->nama }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                        <br>
                                        <div class="mb-3">
                                    <label for="" class="form-label">Alamat</label>
                                    <input 
                                        type="tetx"
                                        class="form-control"
                                        name="alamat"
                                        value="{{ $pelanggan->alamat }}"
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
                                        value="{{ $pelanggan->tlp }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                        />
                                        <small id="helpId" class="form-text text-muted"></small>
                                        <br>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-dark" href="/pelanggan">Kembali</a>
                        </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection