@extends('layouts.master')
@section('title','produk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="caed">
                        <div class="card-header">
                            @if(session('success'))
                                <div class="alert alert-info">
                                        {{ session('success')}}
                                </div>
                            @endif
                            <h3>Halaman Edir Data Produk</h3>
                        </div>
                        <hr>
                        <br>
                        <div class="card-body">
                            <form action="/produk/{{$produk->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('gambar')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Produk</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        value="{{ old('nama_produk',$produk->nama_produk) }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('nama_produk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        value="{{ old('harga',$produk->harga) }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('harga')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="stok"
                                        id=""
                                        value="{{ old('stok',$produk->stok) }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('stok')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-label">Barcode</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="barcode"
                                        id=""
                                        value="{{ old('barcode',$produk->barcode) }}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('barcode')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a class="btn btn-dark" href="/produk">Kembali</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection