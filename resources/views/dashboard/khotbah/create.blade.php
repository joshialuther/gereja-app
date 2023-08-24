@extends('layouts.app')
@section('content')
    <form action="/khotbah/store" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Tambah Khotbah</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_khotbah">Tanggal Khotbah :</label>
                                <input type="date" class="form-control" name="tanggal_khotbah" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="judul_khotbah">Judul Khotbah :</label>
                                <input type="text" class="form-control" name="judul_khotbah" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="isi_khotbah">Isi Khotbah :</label>
                                <textarea name="isi_khotbah" id="" cols="120" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="submit" value="simpan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
