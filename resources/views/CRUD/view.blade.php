@extends('layouts.app')

@section('content')
@if ($datas->count() > 0)
<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="card">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis Buku</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">Tahun Terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $book)
                        <tr>
                        <th>{{$book->id}}</th>
                        <td>{{$book->judul}}</td>
                        <td>{{$book->penulis}}</td>
                        <td>{{$book->halaman}}</td>
                        <td>{{$book->terbit}}</td>
                        <td><a href="{{ route ('UpdateForm', $book->id) }} " class="btn btn-primary">Update</a></td>
                        <td>
                            <form action="{{ route ('DeleteBuku', $book->id) }}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn-danger btn">
                                    {{ __('Hapus') }}
                                </button></td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center" style="margin-top: 25"><h6><a href="{{ route ('home') }}">Kembali ke halaman utama</a></h6></div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="container" style="margin-top: 25px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="text-center"><h3>Mohon maaf, tidak ada buku yang tersedia dalam daftar untuk saat ini.</h3></div>
    <div class="text-center"><h4><a href="{{ route ('home') }}">Kembali ke halaman utama</a></h4></div>
@endif
@endsection