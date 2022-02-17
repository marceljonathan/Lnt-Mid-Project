@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambahkan Buku Baru') }}</div>

                <div class="card-body">
                   <a href="{{ route ('create') }}">Tambah Disini</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tampilkan Daftar Buku') }}</div>

                <div class="card-body">
                   <a href="{{ route ('ViewAll') }}">Tampilkan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
