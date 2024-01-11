@extends('layout/userlayout')

@section('title', 'User')

@section('navbar')

@endsection

@section('daftar')
<h1>Cari Buku</h1>
<div style="display: inline; margin-bottom: 15px;">
    <button class="btn btn-outline-primary" onclick="window.location.href='{{route('user-search')}}'">Buku</button>
    <button class="btn btn-outline-primary" onclick="window.location.href='{{route('user-search-2')}}'">Non Buku</button>
</div>
<div class="form-outline mb-4">
    <input type="text" name="search" id="search" placeholder="Search something..."> <button type="submit" name="cari" id="cari" class="btn btn-outline-primary">Cari</button>
</div>
<hr>
<div id="data">
    @include('user/searchresult');
</div>
<script>
    $(document).ready(function () {
        $("#cari").click(function () {});
    });
</script>
@endsection