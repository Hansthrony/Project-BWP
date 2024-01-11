@extends('layout/userlayout')

@section('title', 'User')

@section('navbar')

@endsection

@section('daftar')
<h1>Lihat semua buku</h1>
<div class="row">
    <p>{{$user->id_user}}</p>
    @foreach($buku as $book)
        <div class="col-md-2">
            <div class="card" style="margin-bottom: 20px; border-radius: 15px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <img src="{{ $book->gambar_buku }}" class="card-img-top" alt="{{ $book->judul_buku }}" width="" height="250px">
                <div class="card-body">
                    <p class="card-text">{{ $book->users->nama }}</p>
                    <h5 class="card-title">{{ $book->judul_buku }}</h5>
                    <p class="card-text text-primary">Rp. {{ $book->harga_buku }}</p>
                    <a href="{{route('detail-buku',['id_buku' => $book->id_buku])}}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection