@extends('layouts.app')
@section('content')
    <form action="/persembahan/store" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Tambah Persembahan</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_persembahan">Tanggal :</label>
                                <input type="date" class="form-control" name="tanggal_persembahan" id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_persembahan">Jumlah Persembahan :</label>
                                <input type="number" class="form-control" name="jumlah_persembahan" id="">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="submit" name="simpan" value="simpan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
