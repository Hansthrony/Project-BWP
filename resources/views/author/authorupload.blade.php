@extends('layout/authorLayout')

@section('title', 'Upload Buku')

@section('navbar')

@endsection

@section('daftar')
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h1 width="40" size="20"> Upload Buku</h1><br>
                        <form action="{{ route('doUpload') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline mb-4">
                                <p>Judul Buku : </p>
                                <input type="text" name="txtJudul" id="txtJudul" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Gambar : </p>
                                <input type="file" name="gambar" id="gambar" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Sinopsis : </p>
                                <input type="text" name="txtSinopsis" id="txtSinopsis" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Isi : </p>
                                <input type="text" name="txtIsi" id="txtIsi" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Harga : </p>
                                <input type="text" name="txtHarga" id="txtHarga" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Halaman : </p>
                                <input type="text" name="txtHalaman" id="txtHalaman" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Stock : </p>
                                <input type="text" name="txtStock" id="txtStock" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Tanggal Terbit : </p>
                                <input type="date" name="tgl" id="tgl" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Lebar Buku : </p>
                                <input type="text" name="txtLebar" id="txtLebar" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Panjang Buku : </p>
                                <input type="text" name="txtPanjang" id="txtPanjang" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Rating Buku : </p>
                                <input type="text" name="txtRating" id="txtRating" class="form-control form-control-lg">
                            </div>
                            <div class="form-outline mb-4">
                                <p>Genre Buku : </p>
                                <select name="cbGenre" id="cbGenre" class="form-control form-control-lg">
                                    <option value="1">Agama Islam</option>
                                    <option value="2">Agama Kristen</option>
                                    <option value="3">Agama Katolik</option>
                                    <option value="4">Agama Hindu</option>
                                    <option value="5">Agama Buddha</option>
                                    <option value="6">Agama Konghucu</option>
                                    <option value="7">Fauna</option>
                                    <option value="8">Flora</option>
                                    <option value="9">Geography</option>
                                    <option value="10">History</option>
                                    <option value="11">Technology</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4">
                                <p>Status Buku : </p>
                                <select name="cbStatus" id="cbStatus" class="form-control form-control-lg">
                                    <option value="Ready Stock">Ready Stock</option>
                                    <option value="Stock Tidak Ready">Stock Tidak Ready</option>
                                </select>
                            </div>
                            <input type="submit" value="Upload" name="btnUpload" class="btn btn-primary btn-lg btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
