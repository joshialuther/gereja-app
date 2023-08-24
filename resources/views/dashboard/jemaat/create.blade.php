@extends('layouts.app')
@section('content')
    <form action="/jemaat/store" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Tambah Jemaat</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control" name="nama" id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nik">NIK :</label>
                                <input type="number" class="form-control" name="nik" id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir :</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir :</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gol_darah">Golongan Darah :</label>
                                <select name="gol_darah" class="form-control" id="">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin :</label>
                                <br>
                                <input type="radio" id="pria" name="jenis_kelamin" value="pria">
                                <label for="pria">Pria</label><br>
                                <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
                                <label for="wanita">Wanita</label><br>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat_jemaat">Alamat :</label>
                                <textarea name="alamat_jemaat" id="alamat_jemaat" cols="25" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_telepon">Nomor Telepon :</label>
                                <input type="number" class="form-control" name="no_telepon" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_pelayanan">Pelayanan :</label>
                                <select name="nama_pelayanan" id="nama_pelayanan">
                                    @foreach ($dataPelayanan as $item)
                                        <option value="{{ $item->id_pelayanan }}">{{ $item->jenis_pelayanan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama_wilayah">Wilayah:</label>
                                    <select name="nama_wilayah" id="nama_wilayah">
                                        @foreach ($dataWilayah as $item)
                                            <option value="{{ $item->id_wilayah }}">{{ $item->nama_wilayah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </form>
@endsection
