@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1>Dashboard</h1>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">
                <h2>Jumlah Wilayah Aktif</h2>
            </div>
            <div class="card-body">
                {{ $wilayah }}

            </div>
        </div>
    </div>
@endsection
