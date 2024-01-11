@extends('layout/layout')

@section('title', 'Home')

@section('navbar')

@endsection

@section('carousel')

@endsection

@section('daftar')
    <h1>Recommended Book</h1>
    @foreach($dataBuku['dataBuku'] as $book)
        <div class="col-md-2">
            <div class="card" style="margin-bottom: 20px; border-radius: 15px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <img src="{{ $book->gambar_buku }}" class="card-img-top" alt="{{ $book->judul_buku }}" width="" height="250px">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->judul_buku }}</h5>
                    <p class="card-text">{{ $book->sinopsis_buku }}</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection